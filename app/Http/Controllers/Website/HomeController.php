<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(){
        
        $data['new_header'] = Category::where('parent_id' ,0)->get();
        return view('website.master',$data);
    }

    public function getCategory($id = 0){
        $data['mini_category'] = Category::where('parent_id',$id)->get();
        return $data;
    }

    public function category_news($id){
        $data['category']= News::where('category_id',$id)->where('status',1)->get()->toArray();
        return view('website.modules.home.index',$data);
    }
    
   
}
