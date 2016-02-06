<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Routes for configs
Route::resource('/panel/maindata', 'Panel\Configs\MaindataController');
Route::resource('/panel/social', 'Panel\Configs\SocialController');
Route::resource('panel/committees', 'Panel\Configs\CommitteesController');
Route::resource('panel/short-desc-images', 'Panel\Configs\ShortDescriptionImagesController');
Route::resource('panel/short-desc-word', 'Panel\Configs\ShortDescriptionWordController');
Route::resource('panel/council', 'Panel\Configs\CouncilController');
Route::resource('panel/syndicate-ads', 'Panel\Configs\SyndicateAdsController');
Route::resource('panel/links', 'Panel\Configs\LinksController');
Route::get('panel/links/{id}/toggle-visibility', 'Panel\Configs\LinksController@toggleVisibility');
//Route for pages
Route::resource('panel/pages', 'Panel\Pages\PagesController');
//Route for news
Route::resource('panel/news', 'Panel\News\NewsController');

//Routes for authentication and registration
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');



Route::get('panel', function () {
    return 'Welcome admin';
});

//Routing for public site
Route::get('/', 'Site\Home\HomeController@index');
