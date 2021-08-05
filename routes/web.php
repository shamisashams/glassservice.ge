<?php
/**
 *  routes/web.php
 *
 * Date-Time: 03.06.21
 * Time: 15:41
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\CKEditorController;
use Illuminate\Support\Facades\Route;

Route::post('ckeditor/image_upload', [CKEditorController::class, 'upload'])->name('upload');

Route::redirect('',config('translatable.fallback_locale'));
Route::prefix('{locale?}')
    ->middleware(['setlocale'])
    ->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('login', [LoginController::class, 'loginView'])->name('loginView');
            Route::post('login', [LoginController::class, 'login'])->name('login');


            Route::middleware('auth')->group(function () {
                Route::get('logout', [LoginController::class, 'logout'])->name('logout');


                // Language
                Route::resource('language', LanguageController::class);
                Route::get('language/{language}/destroy', [LanguageController::class, 'destroy'])->name('language.destroy');

                // Translation
                Route::resource('translation', TranslationController::class);

                // Category
                Route::resource('category', CategoryController::class);
                Route::get('category/{category}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

                // Product
                Route::resource('product', ProductController::class);
                Route::get('product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

                // Project
                Route::resource('project', ProjectController::class);
                Route::get('project/{project}/destroy', [ProjectController::class, 'destroy'])->name('project.destroy');

                // Slider
                Route::resource('slider', SliderController::class);
                Route::get('slider/{slider}/destroy', [SliderController::class, 'destroy'])->name('slider.destroy');

            });
        });

    });
//Home Page
Route::get('', function (){
    return view("client.pages.home.index");
})->name('home.index');

//Contact Page
Route::get('/contact', function (){
    return view("client.pages.contact.index");
})->name('contact.index');

//About Page
Route::get('/about', function (){
    return view("client.pages.about.index");
})->name('about.index');

//Product Page
Route::get('/product', function (){
    return view("client.pages.product.index");
})->name('product.index');
Route::get('/product/{product}', function (){
    return view("client.pages.product_detail.index");
})->name('product_detail.index');

//Project Page
Route::get('/project', function (){
    return view("client.pages.project.index");
})->name('project.index');
Route::get('/project/{project}', function (){
    return view("client.pages.project_detail.index");
})->name('project_detail.index');

//Search Page
Route::get('/search', function (){
    return view("client.pages.search.index");
})->name('search.index');

//Service Page
Route::get('/service', function (){
    return view("client.pages.service.index");
})->name('service.index');
