<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
require_once(app_path().'/Library/simple_html_dom.php');
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class CrawlerController extends Controller
{
    public function fetchAllTGDD()
    {
        $html = file_get_html('https://tuoitre.vn/kinh-doanh.htm');

        foreach ($html->find('.box-category-item') as $element) {
            // get the title
            $title_element = $element->find('.box-content-title h3 a', 0);
            $title = isset($title_element) ? $title_element->title : '';
            $href = isset($title_element) ? $title_element->href : '';

            // get the intro
            $intro_element = $element->find('.box-category-content p', 0);
            $intro = isset($intro_element) ? $intro_element->plaintext : '';

            // get the image
            $img_element = $element->find('.box-category-link-with-avatar img', 0);
            $img_src = isset($img_element) ? $img_element->src : '';

            // get the content
            $detail = @file_get_html('https://tuoitre.vn' . $href);
            if (!$detail) {
                continue; // continue to next iteration if failed to get content
            }
            $contents = $detail->find('.detail-cmain .detail-content ');
            $content_arr = [];
            foreach ($contents as $content) {
                $content_arr[] = $content->outertext;
            }
            $content = implode("", $content_arr);
            echo '<script>';
            echo 'CKEDITOR.instances.editor1.setData("'.$content.'");';
            echo '</script>';
            DB::table('news')->insert([
                'uuid' => Str::uuid(),
                'title' => $title,
                'content' => $content,
                'intro' => $intro,
                'avatar' => $img_src,
                'author' => 'Tuoi Tre',
                'status' => 0,
                'new_view' => 0,
                'where_in' => 1,
                'category_id' => 5,
                'created_at' => now()
            ]);
          $i = 1; 
          $i++;
        }
        echo 'success' .$i .'post';
    }
}
