<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\View;
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
            $id = last(request()->segments());
            $mini_categories = collect();
            if ($id != 0) {
                $mini_categories = Category::select('name_cate','id_category')->where('parent_id',$id)->get();
            }
            $new_header = Category::select('name_cate','id_category')->where('parent_id', 0)->where('status_cate', 1)->get();
            $view->with('mini_categories', $mini_categories)
                ->with('new_header', $new_header);
        });
    }
}
