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

Route::get('/', function () {
    $slides = \DB::table('slides')->get();
    $plans = \DB::table('plans')->get();
    $areas = \DB::table('areas')->get();
    $offers = \DB::table('offers')->get();
    return view('welcome', compact('slides', 'plans', 'areas', 'offers'));
});

Route::get('/about', 'LandingController@about');
Route::get('/work', 'LandingController@work');
Route::get('/contact', 'LandingController@contact');
Route::post('/send', 'LandingController@send')->name('send');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/slides', 'LandController@slides');
Route::get('/register_slide', 'LandController@slide');
Route::post('/register_slide', 'LandController@register_slide');
Route::get('/slide_delete/{id}', 'LandController@destroy_slide');

Route::get('/plans', 'LandController@plans');
Route::get('/register_plan', 'LandController@plan');
Route::post('/register_plan', 'LandController@register_plan');
Route::get('/plan_delete/{id}', 'LandController@destroy_plan');

Route::get('/areas', 'LandController@areas');
Route::get('/register_area', 'LandController@area');
Route::post('/register_area', 'LandController@register_area');
Route::get('/area_delete/{id}', 'LandController@destroy_area');

Route::get('/offers', 'LandController@offers');
Route::get('/register_offer', 'LandController@offer');
Route::post('/register_offer', 'LandController@register_offer');
Route::get('/offer_delete/{id}', 'LandController@destroy_offer');

Route::get('/about_page', 'LandController@about');
Route::post('/update_about', 'LandController@update_about');

Route::get('/contact_page', 'LandController@contact');
Route::post('/update_contact', 'LandController@update_contact');

