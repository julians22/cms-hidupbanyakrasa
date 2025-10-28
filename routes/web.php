<?php

use App\Http\Controllers\FrontendPageController;
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

Route::get('/', [FrontendPageController::class, 'home_page']);

Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
    Route::get('/', [FrontendPageController::class, 'product_page'])->name('index');
    Route::get('{type}', [FrontendPageController::class, 'product_page_type'])->name('type');
});

// Route::get('product-detail/{slug}','ProductController@detail');
// Route::post('product-modal','ProductController@modal');

Route::group(['prefix' => 'generasi-masa-kini', 'as' => 'blog.'], function () {
    Route::get('/', [FrontendPageController::class, 'blog_page'])->name('index');
    Route::get('detail/{slug}', [FrontendPageController::class, 'blog_page_detail'])->name('detail');
});


// Route::get('generasi-masa-kini','ArticleController@index');
// Route::get('generasi-masa-kini-devel','ArticleController@index_devel');
// Route::get('generasi-masa-kini/page/{tag}/{index}','ArticleController@page');
// Route::get('generasi-masa-kini/detail/{slug}','ArticleController@detail');

Route::group(['prefix' => 'events-n-gallery', 'as' => 'events.'], function() {
    Route::get('/', [FrontendPageController::class, 'events_page'])->name('index');
});

// Route::get('events-n-gallery','GaleryController@index');
// Route::get('events-n-gallery/page/{tag}/{index}','GaleryController@page');
// Route::get('events-n-gallery/detail/{slug}','GaleryController@detail');

Route::group(['prefix' => 'cari-terus-rasamu', 'as' => 'recipe.'], function() {
    Route::get('/', [FrontendPageController::class, 'recipe_page'])->name('index');
});


// Route::get('cari-terus-rasamu','RecipeController@index');
// Route::post('cari-terus-rasamu/modal','RecipeController@modal');

Route::group(['prefix' => 'horoscope', 'as' => 'horoscope.'], function() {
    Route::get('/', [FrontendPageController::class, 'horoscope_page'])->name('index');
});
// Route::get('horoscope','HoroscopeController@index');
// Route::post('horoscope/detail','HoroscopeController@detail');

// Route::get('coloring','ColoringController@index');
// Route::get('coloring-theraphy','ColoringController@index');
// Route::get('coloring-theraphy/{param}','ColoringController@template');
// Route::post('coloring/parseTempImg','ColoringController@parseTempImg');
// Route::post('coloring/{result}/{param}','ColoringController@share');
// Route::post('coloring/getImage','ColoringController@getImage');

// Route::get('picture-art','PictureController@index');
// Route::get('picture-art/story','PictureController@story');
// Route::get('picture-art/feed-mobile','PictureController@feedMobile');
// Route::get('picture-art/story-mobile','PictureController@storyMobile');

// Route::get('picture-art/{slug1?}/{slug2?}','PictureController@detail')->name('pictureart');
// Route::get('games','GamesController@index')->name('games');
// Route::get('consumer','GaleryController@consumer')->name('consumer');
// Route::get('kopi-good-day-kejutan-penuh-rasa','GaleryController@Kopi_Good_Day_Kejutan_Penuh_Rasa')->name('kopigoodaykejutanpenuhrasa');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
