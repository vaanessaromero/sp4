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

Route::get('/search', function (Request $request) {
    return App\Journal::search('*')->get();
});

Route::get('/SearchQuery', 'SearchController@search')->name('searchpage');

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

Route::get('guest', function(){
    return view('search.results');
});

Route::get('/journalCRUD.create', 'PDFUploadController@index');

Route::post('/upload/pdf', [
  'uses'   =>  'PDFUploadController@uploadPDF',
  'as'     =>  'uploadPDF'
]);