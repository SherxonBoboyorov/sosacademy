<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\WarrantyController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CalbackController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\Sub_categoryController;
use UniSharp\laravel\LaravelFilemanager\Lfm;


use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\CoursesController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\CourseInformationController;
use App\Http\Controllers\ApplyController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resources([
        'slider' => SliderController::class,
        'category' => CategoryController::class,
        'product' => ProductController::class,
        'warranty' => WarrantyController::class,
        'article' => ArticleController::class,
        'calback' => CalbackController::class,
        'price' => PriceController::class,
        'sub_category' => Sub_categoryController::class
    ]);
});

// views

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', [IndexController::class, 'homepage'])->name('/');
        Route::get('courses', [CoursesController::class, 'index'])->name('courses');
        Route::get('articles', [NewsController::class, 'list'])->name('articles');
        Route::get('articles/{id}', [NewsController::class, 'show'])->name('article');
        Route::get('courseinformation', [CourseInformationController::class, 'course_information'])->name('courseinformation');
        Route::post('/apply', [ApplyController::class, 'index'])->name('/apply');
    });


 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
 });

