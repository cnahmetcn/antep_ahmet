<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\OganiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[AboutController::class,'kisiler'])->name('anasayfa');;
Route::get('/kisi-ekle',[AboutController::class,'create'])->name('kisiler.create');
Route::post('/save-kisiler',[AboutController::class,'store'])->name('kisiler.save');
Route::get('/satis',[AboutController::class,'satis']);
Route::post('/import-kisiler',[AboutController::class,'import'])->name('kisiler.import');

/**
 * Product İşlemleri
 */

Route::get('/create-product',[ProductController::class,'create'])->name('product.create');
Route::post('/save-product',[ProductController::class,'store'])->name('product.save');
Route::get('/show-product',[ProductController::class,'index'])->name('product.show');
Route::get('/export-product',[ProductController::class,'export'])->name('product.export');
Route::post('/import-product',[ProductController::class,'import'])->name('product.import');

/**
 * Kategori İşlemleri
 */

Route::get('/create-category',[CategoryController::class,'create'])->name('category.create');
Route::post('/save-category',[CategoryController::class,'store'])->name('category.save');
Route::get('/show-category',[CategoryController::class,'index'])->name('category.show');
Route::post('/import-category',[CategoryController::class,'import'])->name('category.import');

/**
 * Slider
 */

Route::get('/show-sliders',[SliderController::class,'index'])->name('sliders.show');
Route::get('/delete-slider/{id}',[SliderController::class,'destroy'])
    ->name('slider.delete')->where(array('id'=>'[0-9]+'));

/**
 * Ogami
 */

Route::get('/ogani',[OganiController::class,'index']);

/**
 * Blog İşlemleri
 */

Route::get('/create-blog',[BlogController::class,'create'])->name('blog.create');
Route::post('/save-blog',[BlogController::class,'store'])->name('blog.save');

/**
 * Password İşlemleri
 */

Route::get('/forgotPassword',[PasswordController::class,'index'])->name('forgotPassword');
Route::post('/sendPassword',[PasswordController::class,'sendPassword'])->name('sendPassword');





