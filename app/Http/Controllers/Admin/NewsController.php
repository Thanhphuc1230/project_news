<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class NewsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data['categories_select'] = Category::select('id_category', 'name_cate','parent_id')
        ->where('id_category','>',1) 
        ->get();
        $data['news'] = DB::table('news')
                ->join('categories', 'news.category_id', '=', 'categories.id_category')
                ->select('news.*', 'categories.name_cate')
                ->orderBy('categories.name_cate', 'asc')
                ->get();

        return view('admin.modules.news.index',$data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {   
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime(); 
        $data['uuid'] = Uuid::uuid4()->toString();
        
        $imageName = time().'-'.$request->avatar->getClientOriginalName();  
        $request->avatar->move(public_path('images/news'), $imageName);
        $data['avatar'] = $imageName;
        DB::table('news')->insert($data);
        
        return redirect()->back()->with('success', 'Thêm bài viết thành công');
    }
  
    public function unactive_news($id){

        News::where('uuid',$id)->update(['status'=>1]);

        return redirect()->back()->with('success', 'Kích hoạt sản phẩm thành công');
    }
    public function active_news($id){

        News::where('uuid',$id)->update(['status'=>0]);

        return redirect()->back()->with('success', 'Tắt kích hoạt sản phẩm thành công');

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $new =News::where('uuid', $id);

        if ($new->exists()) {
            $data['new'] = $new->first();
            $data['category_selected']= Category::all();
            return view('admin.modules.news.edit',$data);
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, string $id)
    {
        $new_current = News::where('uuid', $id)->first();

        $data = $request->except('_token');

        $data['updated_at'] = new \DateTime();

        if (empty($request->avatar)) {
            $data['avatar'] = $new_current->avatar; 
            
        } else {
            $image_path = public_path('images/news') . "/" . $new_current->avatar;

            if (file_exists($image_path)) {
                unlink($image_path);
            }

            $imageName = time().'-'.$request->avatar->getClientOriginalName();  
            $request->avatar->move(public_path('images/news'), $imageName);
            $data['avatar'] = $imageName;
      
        }
        News::where('uuid', $id)->update($data);
      
       return redirect()->route('admin.news.index')->with('success', 'Successful news update.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category =  News::where('uuid', $id);
        if ($category->exists()) {
            $category->delete();
            return redirect()->route('admin.news.index')->with('success', 'Successful news deletion.');
        } else {
            abort(404);
        }
    }
}
