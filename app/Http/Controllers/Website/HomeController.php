<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $data['breaking_news_left'] = News::select('news.uuid', 'news.title', 'news.intro', 'categories.name_cate')
            ->join('categories', 'categories.id_category', '=', 'news.category_id')
            ->where('news.status', 1)
            ->where('news.where_in', 1)
            ->limit(2)
            ->get();

        $data['breaking_news_right'] = News::select('news.uuid', 'news.title', 'news.intro', 'categories.name_cate')
            ->join('categories', 'categories.id_category', '=', 'news.category_id')
            ->where('news.status', 1)
            ->where('news.where_in', 1)
            ->offset(2)
            ->limit(2)
            ->get();
        return view('website.master', $data);
    }

    public function getCategory($id = 0)
    {
        $data['mini_category'] = Category::select('name_cate')->where('parent_id', $id)->get();
        return $data;
    }

    public function category_news($id)
    {
        $data['new_header'] = Category::select('name_cate','id_category')->where('parent_id', 0)->get();
        $data['category'] = DB::table('news')->where('category_id', $id)->where('status', 1)->get()->toArray();
        return view('website.modules.home.index', $data);
    }

    public function test()
    {
        return view('website.modules.test.test');
    }
}
