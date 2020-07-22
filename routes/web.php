<?php

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
//

Route::group(['middleware'=>'Maintenance'],function (){


Route::get('/','Hompagefrontend@index');
//Route::post('/autocomplete/fetch','Hompagefrontend@fetch')->name('autocomplete.fetch');
 Route::get('show/article/{id}','Hompagefrontend@show_article');
Route::post('newsletter_store_front', 'Hompagefrontend@newsletter_store_front');


// -------------------------------------------------
    Route::get('/search','Hompagefrontend@search')->name('search');

// -------------------------------------------------
Route::get('article_details','Hompagefrontend@article_details');
Route::get('events','Hompagefrontend@events');
Route::get('show/event/{id}','Hompagefrontend@show_slider');

Route::get('news','Hompagefrontend@news');
Route::get('show/news/{id}','Hompagefrontend@show_news');

Route::get('ads','Hompagefrontend@ads');
Route::get('show/ads/{id}','Hompagefrontend@show_ads');

// -------------------------------------------------
Route::get('show/product/{id}','Hompagefrontend@show');
Route::get('show/department/{id}','Hompagefrontend@show_department');
Route::get('show/all/products','Hompagefrontend@show_all_products_page');

Route::get('lang_front_ar','Hompagefrontend@lang_front_ar');
Route::get('lang_front_en','Hompagefrontend@lang_front_en');



 });//Maintenance


Route::get('maintenance', function () {
//    return dd(setting()->status);
    if (setting()->status == 'open')
    {
        return redirect('/');
    }
     return view('front.maintenance');
 });



Route::get('storageLink', function () {
//    return php artisan storage:link;
     Artisan::call('storage:link');
          return back();
 });
Route::get('config', function () {
//    return  php artisan config:clear ;
     Artisan::call('config:clear');
          return back();
 });
 Route::get('view', function () {
//    return php artisan view:clear ;
     Artisan::call('view:clear');
          return back();
 }); 
 Route::get('cache', function () {
//    return php artisan cache:clear ;
     Artisan::call('cache:clear');
          return back();
 }); 





Route::get('/createStorage', function () {
    Artisan::call('storage:link');
});



Route::get('relodpage', function () {
       return Redirect::back()->with('message',' success');

});
 
