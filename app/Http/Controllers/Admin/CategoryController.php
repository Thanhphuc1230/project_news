<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data['categories'] = Category::select('uuid','name_cate', 'status_cate', 'created_at')->get();
        $data['category_selected'] = Category::select('id_category', 'name_cate')->where('parent_id', 1)->get();
        return view('admin.modules.category.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        
        $category = [
            'name_cate' => $request->name_cate,
            'uuid' =>  Str::uuid(),
            'status_cate' => $request->status_cate,
            'parent_id' => $request->parent_id,
            'created_at' => Carbon::now(), 
        ];
        Category::create($category);
        
        return redirect()->route('admin.categories.index')->with('success', 'Successful category create.');
    }

    public function unactive_categories($id){

        Category::where('uuid',$id)->update(['status_cate'=>1]);

        return redirect()->back()->with('success', 'Kích hoạt sản phẩm thành công');
    }
    public function active_categories($id){
        
        Category::where('uuid',$id)->update(['status_cate'=>0]);

        return redirect()->back()->with('success', 'Tắt kích hoạt sản phẩm thành công');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category =Category::where('uuid', $id);
        
        if ($category->exists()) {
            $data['category'] = $category->first();
            $data['category_selected']= Category::all();
            return view('admin.modules.category.edit',$data);
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $data = $request->except('_token');
        $data['updated_at'] = new \DateTime();
        Category::where('uuid', $id)->update($data);

       return redirect()->route('admin.categories.index')->with('success', 'Successful category update.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::where('uuid', $id);

        if ($category->exists()) {
            $category->delete();
            return redirect()->route('admin.categories.index')->with('success', 'Successful category deletion.');
        } else {
            abort(404);
        }
    }
}
