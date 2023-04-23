<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
class NewsController extends Controller
{
    public function detailNew($uuid){
        $data['detail_new'] = DB::table('news')
            ->where('uuid',$uuid)
            ->first();
        $data['featured_posts']= DB::table('news')->where('uuid', '!=', $uuid)->get();
        return view('website.modules.new.detail',$data);
    }
}
