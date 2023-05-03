<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $uuid = last(request()->segments());
            $id = DB::table('categories')->where('uuid', $uuid)->value('id_category');
            
            $mini_categories = $uuid != 0 ? Category::select('name_cate', 'id_category','uuid')->where('parent_id', $id)->get() : collect();
            
            $new_header = Category::select('name_cate', 'id_category','uuid')->where('parent_id', 1)->where('status_cate', 1)->get();
        
            $latest_news = DB::table('news')
                ->select('uuid', 'avatar', 'title')
                ->where('status', 1)
                ->orderBy('created_at', 'desc')
                ->inRandomOrder()
                ->limit(5)
                ->get();
        
            $idOfLatestNews = $latest_news->pluck('uuid')->toArray();
        
            $latest_news_2 = DB::table('news')
                ->select('uuid', 'avatar', 'title')
                ->where('status', 1)
                ->orderBy('created_at', 'desc')
                ->whereNotIn('uuid', $idOfLatestNews)
                ->inRandomOrder()
                ->limit(5)
                ->get();
        
            $view->with(compact('mini_categories', 'new_header', 'latest_news', 'latest_news_2'));
        });
    }
}
