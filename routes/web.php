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
Route::get('/clear', function() {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});

// Route::get('/', function () {
//     // app(Nexmo\Client::class);

//     return view('dashboard.home.index');
// });


Route::get('/', function () {
    // app(Nexmo\Client::class);

    return view('website.content');
});



Route::get('/about', function () {
    // app(Nexmo\Client::class);

    return view('website.about');
});

Route::get('/mfact', function () {
    // app(Nexmo\Client::class);

    return view('website.mfact');
});










Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/verify', 'VerifyController@getVerify')->name('getVerify');
Route::post('/verify', 'VerifyController@postVerify')->name('verify');


