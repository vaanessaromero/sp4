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

Route::get('search/', 'SearchController@index')->name('searchRegionForm');
Route::post('search/', 'SearchController@processForm')->name('processRegion');

Route::get('/SearchQuery', 'SearchController@search');

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
	Route::resource('subjectCRUD','SubjectController');
	Route::resource('journalCRUD','JournalCRUDController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/regions', 'RegionController@index');
Route::get('/subjects', 'SubjectController@viewAll');
Route::get('/searchresults', 'SearchResultsController@index');

Route::get('searchresults/subject/{subject_id}','SearchResultsController@all_subject_result')->name('searchresults.subject');
Route::get('searchresults/region/{region}','SearchResultsController@all_region_result')->name('searchresults.region');

Route::get('/searchresults/keyword', 'SearchResultsController@searchbykeyword');
Route::get('/searchresults/title', 'SearchResultsController@searchbytitle');
Route::get('/searchresults/subject', 'SearchResultsController@searchbysubject');

Route::get('/journalCRUD.create', 'PDFUploadController@index');

Route::post('/upload/pdf', [
  'uses'   =>  'PDFUploadController@uploadPDF',
  'as'     =>  'uploadPDF'
]);