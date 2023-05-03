<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Comment;
class NewsController extends Controller
{   
    public function getChildCategory($id_category){
        $data['category_child']=DB::table('categories')->select('name_cate','parent_id')->where('id_category',$id_category)->first();
        $parent_id = $data['category_child']->parent_id;
        $data['category']=DB::table('categories')->select('id_category','uuid','name_cate','parent_id')->where('id_category',$parent_id)->first();

        return $data;
    }
    
    public function detailNew($uuid)
    {   
        if (!Uuid::isValid($uuid)) {
            return new Response(view('website.modules.error.index'), 404);
        }

        // +1 view in database
        $news = News::where('uuid', $uuid)->firstOrFail();
        $news->increment('new_view');
        
        $data['detail_new'] = DB::table('news')
        ->join('categories', 'categories.id_category', '=', 'news.category_id')
        ->select('news.*','categories.name_cate')
        ->where('news.uuid', $uuid)
        ->first();

        $data['count_comment'] = DB::table('comments')
             ->where('post_id_comment', $uuid)
             ->where('status_comment',1)
             ->count();
        $category_id = $data['detail_new']->category_id;
        //name category in header
        $data['category_header'] = $this->getChildCategory($category_id);
        //sidebar right of detail
         $data['news_updated'] = DB::table('news')
         ->select('uuid','avatar','title','new_view')
         ->where('status',1)
         ->orderByDesc('new_view')  
         ->limit(6)  
         ->get();
         $uuidOfNewUpdated = $data['news_updated']->pluck('uuid')->toArray();
        //featured_posts in bot of detail
        $data['featured_posts'] = DB::table('news')
            ->where('category_id', $category_id)
            ->where('uuid', '!=', $uuid)
            ->where('status',1)
            ->limit(3)  
            ->get();
        $uuidOfFeaturedPost = $data['featured_posts']->pluck('uuid')->toArray();
        //featured_posts in bot 2 of detail
        $data['featured_posts_bot'] = DB::table('news')
        ->join('categories', 'categories.id_category', '=', 'news.category_id')
        ->select('news.*','categories.name_cate')
        ->where('news.uuid', '!=', $uuid)
        ->whereNotIn('news.uuid', $uuidOfFeaturedPost)
        ->where('news.status',1)
        ->inRandomOrder()
        ->limit(3)  
        ->get();

        $uuidOfFeaturedPostBot = $data['featured_posts_bot']->pluck('uuid')->toArray();
        //all uuid of detail post 
        $uuidOfPostInDetail= array_merge([$uuid], $uuidOfFeaturedPost,$uuidOfFeaturedPostBot,$uuidOfNewUpdated);

        $data['maybeYouLike'] = News::with('category')
        ->whereNotIn('news.uuid', $uuidOfPostInDetail)
        ->where('status', 1)
        ->limit(7)
        ->get();
        //show comments
        $data['comments_user'] =DB::table('comments')
        ->join('users','users.uuid','=','comments.user_id_comment')
        ->select('users.fullname','users.avatar','comments.comment','comments.post_id_comment','comments.created_at')
        ->where('comments.post_id_comment',$uuid)
        ->where('comments.status_comment',1)
        ->limit(4)
        ->get();
        //count comment of post
        $data['count_comments']= Comment::where('post_id_comment', $uuid)->where('status_comment',1)->count();
        return view('website.modules.new.detail', $data);
    }

    public function postComment(Request $request,$id){
        
        //create comment
        if($request->comments == NULL){
            return back()->with('error', 'Bạn chưa comment sản phẩm');
        }else{
            $data['uuid'] = Str::uuid();
            $data['comment'] = $request->comments;
            $data['user_id_comment'] = Auth::user()->uuid;
            $data['post_id_comment'] = $id;
            $data['created_at'] = New \DateTime;
            $data['status_comment'] = 0;
        }
    
        DB::table('comments')->insert($data);

        return back()->with('success', 'Đã thêm comment thành công, chúng tôi sẽ xem xét comment của bạn');
    }
}
