<?php


Route::get('/','Controller@index');

Route::get('/add-subscription','Controller@addSubscription')->name('subscribe.add');

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/coupons','CouponController@index');

Route::get('/stores','StoreController@index');

Route::get('/store/{slug}','StoreController@show');

Route::get('/deals', 'DealController@index');

Route::get('/deals/{slug}', 'DealController@show');

Route::get('/blog','BlogController@index');

Route::get('/blog/search', 'BlogController@search')->name('blog.search');

Route::get('/blog/category/{slug}','BlogController@searchByCategory');

Route::get('/blog/{slug}', 'BlogController@show');




Route::group(['prefix' => 'backend'], function () {
    Voyager::routes();
});
