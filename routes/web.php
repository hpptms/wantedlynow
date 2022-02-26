<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sitemap;
use App\Http\Controllers\Inhouse;

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

// sitemap-indexのルート
Route::get('sitemap.xml', 'SitemapController@index')->name('sitemap');
Route::group(['prefix' => 'sitemaps'], function() {
    // sitemapのルート
    Route::get('basics.xml', 'SitemapController@basics')->name('sitemap-basics');
    // sitemapを増やす場合はココに追記していく。
});

// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::get('/towantedly', function () {
    return view('towantedly');
})->name('towantedly');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/', 'InhouseController@index')->name('index');
Route::post('/result', 'InhouseController@serch')->name('result');
// Route::get('/result{?}', 'InhouseController@serch')->name('result');

// Route::get('/index', 'InhouseController@index');
// Route::post('/Inhouse/result', 'InhouseController@result');

Route::get('/hello/add', 'HelloController@add');
Route::post('/hello/result', 'HelloController@result');