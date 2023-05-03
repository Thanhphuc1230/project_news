<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\News;

class HomeController extends Controller
{   
    public function boot_new(){

        $data['local_news'] = News::with('category')
            ->where('status', 1)
            ->where('where_in', 3)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $data['law_news'] = News::with('category')
            ->where('status', 1)
            ->where('where_in', 4)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $data['health_news'] = News::with('category')
            ->where('status', 1)
            ->where('where_in', 5)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $data['travel_news'] = News::with('category')
            ->where('status', 1)
            ->where('where_in', 6)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        $data['most_views'] = News::select('uuid', 'avatar', 'title', 'new_view')
            ->where('status', 1)
            ->orderByDesc('new_view')
            ->limit(7)
            ->get();

        return $data;
    }

    public function getIdCategory($id){

        $data['new_category'] = Category::select('name_cate','id_category')->where('id_category', $id)->first();
        $parent_id = $data['new_category']->id_category;
        $data['breaking_new'] = DB::table('categories')->where('parent_id',$parent_id)->get();
        $id_category = $data['breaking_new']->pluck('id_category')->toArray();
        $category_ids = array_merge([$parent_id], $id_category);

        return [
            'data' => $data,
            'category_ids' => $category_ids
        ];
    }

    public function index()
    {
        $data = [];

        $data['breaking_news_left'] = News::with('category')
            ->where('status', 1)
            ->where('where_in', 1)
            ->inRandomOrder()
            ->limit(2)
            ->get();
        $uuidOfLeftNews=$data['breaking_news_left']->pluck('uuid')->toArray();
        $data['breaking_news_right'] = News::with('category')
            ->where('status', 1)
            ->whereNotIn('uuid',$uuidOfLeftNews)
            ->where('where_in', 1)
            ->inRandomOrder()
            ->offset(2)
            ->limit(2)
            ->get();

        $data['nation_news'] = News::with('category')
            ->where('status', 1)
            ->where('where_in', 2)
            ->inRandomOrder()
            ->limit(4)
            ->get();
        
        $data['boot_new'] = $this->boot_new();

        return view('website.modules.home.index', $data);
    }

    public function getCategory($id = 0)
    {   
        $data['mini_category'] = Category::select('name_cate')->where('parent_id', $id)->get();
        return $data;
    }

    public function category_news($category,$uuid)
    {  
        $id = DB::table('categories')->where('uuid', $uuid)->value('id_category');
        
        $data['new_category'] = $this->getIdCategory($id);
        //get id_category of categories and child categories then get new of id_category
        $category_ids = $data['new_category']['category_ids'];

        $data['new_top'] = DB::table('news')->where('category_id',$id)->where('status',1) ->latest('created_at')->limit(6)->get();
        $uuidOfNewTop = $data['new_top']->pluck('uuid')->toArray();

        $data['new_mid'] =News::with('category')->whereIn('category_id',$category_ids)->whereNotIn('uuid', $uuidOfNewTop) ->latest('created_at')->where('status',1)->limit(4)->get();
        $uuidOfNewMid = $data['new_mid']->pluck('uuid')->toArray();

       $data['new_mid_left'] = News::with('category')
                    ->whereIn('category_id', $category_ids)
                    ->whereNotIn('uuid', $uuidOfNewTop)
                    ->whereNotIn('uuid', $uuidOfNewMid)
                    ->inRandomOrder()
                    ->where('status', 1)
                    ->limit(2)
                    ->get();
        $uuids = $data['new_mid_left']->pluck('uuid')->toArray();

        $data['new_mid_right'] = News::with('category')
                ->whereIn('category_id', $category_ids)
                ->whereNotIn('uuid', $uuidOfNewTop)
                ->whereNotIn('uuid', $uuidOfNewMid)
                ->whereNotIn('uuid', $uuids)
                ->inRandomOrder()
                ->where('status', 1)
                ->limit(2)
                ->get();

        $data['boot_new'] = $this->boot_new();

        $data['maybeYouLike'] = News::with('category')
        ->whereNotIn('uuid', $uuidOfNewTop)
        ->whereNotIn('uuid', $uuidOfNewMid)
        ->whereNotIn('uuid', $uuids)
        ->where('status', 1)
        ->inRandomOrder()
        ->limit(7)
        ->get();
        return view('website.modules.category.index', $data);
    }

    public function test()
    {
        return view('website.modules.test.test');
    }

    public function checkUser(){
        $mess ='nếu chưa có tài khoản vui lòng click vào đây để  <a href="'.route('getRegister').'" style="color: blue">Đăng ký</a>';
        $login = ' <a href="'.route('getLogin').'" style="color: blue">Đăng nhập </a>';
        return back()->with('error', 'Vui lòng'  .$login .'để sử dụng chức năng '.  $mess);
    }
}
