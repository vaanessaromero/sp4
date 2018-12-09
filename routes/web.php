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

Route::get('/', 'WelcomeController@index');

Route::get('/login', function () {
    // return view('layouts.app');
    return view('auth.login');
});

Route::get('/lol', function (Request $request) {
    return App\Journal::search('*')->whereRegexp('subject_field.raw', ', Aquaculture, Agricultural Business, Agricultural Economics, Agricultural Equipment, Agricultural Management, Agronomy, Animal Husbandry, Crop Production, Food Science, Forestry, Horticulture, Soil Science, Veterinary Science')->get();
});
// Route::get('search', ['as' => 'search', 'uses' => 'SearchController@search']);

// Route::get('/search', 'SearchController@index');
// Route::get('/search/{selected_region}', 'SearchController@show');
// Route::get('/search/all/{selected_fields}', 'SearchController@show');
// Route::get('/search/{selected_region}/{selected_fields}', 'SearchController@show');
// Route::post('/search', 'SearchController@processForm');

Route::get('search/', 'SearchController@index')->name('searchRegionForm');
Route::post('search/', 'SearchController@processForm')->name('processRegion');

Route::get('/SearchQuery', 'SearchController@search');

// Route::get('/searchIndex','SearchController@index');



// Route::prefix('admin')->group(function() {
//     Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//     Route::get('/home', 'AdminController@index')->name('admin.home');
// });



// Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom', [
	'uses' => 'LoginController@login',
	'as' => 'login.custom'
]);

Auth::routes();

Route::group(['middleware' => 'App\Http\Middleware\CheckUserStatus' ], function () {
	Route::get('/user/home', 'HomeController@index')->name('home');
	Route::get('/user/editaccount', 'Auth\EditAccountController@index');
	Route::post('/user/editaccount', 'Auth\EditAccountController@update');
});

Route::group(['middleware' => 'App\Http\Middleware\CheckStatus' ], function(){
	Route::get('/admin/home', 'AdminHomeController@index')->name('admin');
	Route::get('/admin/editaccount', 'Auth\ChangePasswordController@index');
	Route::post('/admin/editaccount', 'Auth\ChangePasswordController@update');
	Route::resource('userCRUD','UserCRUDController');
	Route::resource('journalCRUD','JournalCRUDController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/authors', 'AuthorController@index');
Route::get('/subjects', 'SubjectController@index');
Route::get('/searchresults', 'SearchResultsController@index');

Route::get('/journalCRUD.create', 'PDFUploadController@index');

Route::post('/upload/pdf', [
  'uses'   =>  'PDFUploadController@uploadPDF',
  'as'     =>  'uploadPDF'
]);

// Route::post('/admin/register', 'Auth\RegisterController@create');