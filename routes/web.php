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
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\Client\ServiceController;
use Illuminate\Support\Facades\Route;

Route::post('ckeditor/image_upload', [CKEditorController::class, 'upload'])->name('upload');

Route::redirect('', config('translatable.fallback_locale'));
Route::prefix('{locale?}')
    ->middleware(['setlocale'])
    ->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('login', [LoginController::class, 'loginView'])->name('loginView');
            Route::post('login', [LoginController::class, 'login'])->name('login');


            Route::middleware('auth')->group(function () {
                Route::get('logout', [LoginController::class, 'logout'])->name('logout');

                Route::redirect('','/admin/product',);

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

                // Page
                Route::resource('page', PageController::class);
                Route::get('page/{page}/destroy', [PageController::class, 'destroy'])->name('page.destroy');

                // Setting
                Route::resource('setting', SettingController::class);
                Route::get('setting/{setting}/destroy', [SettingController::class, 'destroy'])->name('setting.destroy');


                // Service
                Route::resource('service', \App\Http\Controllers\Admin\ServiceController::class);
                Route::get('service/{service}/destroy', [\App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('service.destroy');

                // Certificate
                Route::resource('certificate', CertificateController::class);
                Route::get('certificate/{certificate}/destroy', [CertificateController::class, 'destroy'])->name('certificate.destroy');

            });
        });

        // Home Page
        Route::get('', function () {
            return view('client.pages.home.index');
        })->name('client.home.index');

        // Contact Page
        Route::get('/contact', function () {
            return view('client.pages.contact.index');
        })->name('client.contact.index');

        // About Page
        Route::get('/about', function () {
            return view('client.pages.about.index');
        })->name('client.about.index');

        // Product Page
        Route::get('/product', [\App\Http\Controllers\Client\ProductController::class, 'index'])->name('client.product.index');
        Route::get('/product/{product}', [\App\Http\Controllers\Client\ProductController::class, 'show'])->name('client.product.show');

        // Project Page
        Route::get('/project', function () {
            return view("client.pages.project.index");
        })->name('client.project.index');
        Route::get('/project/{project}', function () {
            return view('client.pages.project_detail.index');
        })->name('client.project_detail.index');

        // Search Page
        Route::get('/search', function () {
            return view('client.pages.search.index');
        })->name('client.search.index');

        // Service Page
        Route::get('/service', [ServiceController::class, "index"])->name('client.service.index');
    });

