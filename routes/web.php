<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CkeditorController;
use App\Http\Controllers\Admin\CommentController;

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\NewsController as NController;

use App\Http\Controllers\Login\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::fallback(function () {
    return response()->view('website.modules.error.index', [], 404);
});
//website



Route::get('verify/{uuid}', [LoginController::class, 'verify'])->name('verify');


//Login
Route::get('/login_user', [LoginController::class, 'getLogin'])->name('getLogin');
Route::post('/post_login', [LoginController::class, 'postLogin'])->name('postLogin');
//register
Route::get('/register', [LoginController::class, 'getRegister'])->name('getRegister');
Route::post('/post_register', [LoginController::class, 'postRegister'])->name('postRegister');
Route::get('/register/sendMail', [LoginController::class, 'sendMail'])->name('sendMail');
//forgot password
Route::get('password/forgot', [LoginController::class, 'getForgot'])->name('getForgot');
Route::post('password/forgot', [LoginController::class, 'sendResetLink'])->name('sendResetLink');
Route::get('password/reset/{token}', [LoginController::class, 'showResetFrom'])->name('showResetFrom');
Route::post('password/reset', [LoginController::class, 'resetPassword'])->name('resetPassword');
//logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->name('admin.')->middleware('check_login')->group(function () {

    Route::controller(CategoryController::class)->prefix('categories')->name('categories.')->group(
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/unactive_categories/{uuid}', 'unactive_categories')->name('unactive_categories');
            Route::get('/active_categories/{uuid}', 'active_categories')->name('active_categories');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{uuid}', 'edit')->name('edit');
            Route::post('/update/{uuid}', 'update')->name('update');
            Route::get('/destroy/{uuid}', 'destroy')->name('destroy');
        }
    );
    Route::controller(UserController::class)->prefix('users')->name('users.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/unactive_user/{id}', 'unactive_user')->name('unactive_user');
        Route::get('/active_user/{id}', 'active_user')->name('active_user');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{uuid}', 'edit')->name('edit');
        Route::post('/update/{uuid}', 'update')->name('update');
        Route::get('/destroy/{uuid}', 'destroy')->name('destroy');

    });
    Route::post('ckeditor/image_upload', [CkeditorController::class, 'upload'])->name('upload');

    Route::controller(NewsController::class)->prefix('news')->name('news.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/unactive_news/{uuid}', 'unactive_news')->name('unactive_news');
        Route::get('/active_news/{uuid}', 'active_news')->name('active_news');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{uuid}', 'edit')->name('edit');
        Route::post('/update/{uuid}', 'update')->name('update');
        Route::get('/destroy/{uuid}', 'destroy')->name('destroy');

    });
    Route::controller(CommentController::class)->prefix('comment')->name('comment.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/unActive_comment/{uuid}', 'unactive_news')->name('unactive_comment');
        Route::get('/active_comment/{uuid}', 'active_news')->name('active_comment');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{uuid}', 'edit')->name('edit');
        Route::post('/update/{uuid}', 'update')->name('update');
        Route::get('/destroy/{uuid}', 'destroy')->name('destroy');

    });
});
Route::name('website.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/checkUser', [HomeController::class, 'checkUser'])->name('checkUser');
    //Category news
    Route::get('/category/{name_cate}/{id}', [HomeController::class, 'category_news'])->name('category_news');
    
    //News
    Route::get('/detail/{uuid}', [NController::class, 'detailNew'])->name('detailNew');
    Route::post('/postComment/{uuidOfNew}', [NController::class, 'postComment'])->name('postComment');


});


