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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('login','loginController@index');
Route::get('register','registerController@index');


/*------------------------------------------------ Admin Routes ------------------------------------------------*/

//dashboard routes - Admin
Route::get('admin_dashboard','admins\admin_mainController@index');

//add papers routes - Admin
Route::get('add_papers_form','admins\add_papersController@index');
Route::post('add','admins\add_papersController@add_papers');
Route::post('paper_search','admins\add_papersController@search'); //not work properly
Route::delete('delete_paper_record/{id}','admins\add_papersController@delete_paper');

//add subjects - Admin
Route::get('/add_subject_form', 'admins\add_papersController@subject');
Route::post('/add_subject', 'admins\add_papersController@add_subject');
Route::post('search_subject','admins\add_papersController@search_sub');
Route::delete('delete_subject_record/{id}','admins\add_papersController@delete_subject');

//users manage routes - Admin
Route::get('users_manage','admins\users_manageController@index');

//contact messages routes - Admin
Route::get('contact_messages','students\contact_msgController@admin_index');
Route::delete('delete_message/{id}','students\contact_msgController@delete_msg');


/*------------------------------------------------ Students Routes ------------------------------------------------*/
//students routes
Route::get('/home','students\std_mainController@index');
Route::get('/std_contact','students\std_mainController@contact');
Route::post('/message_submit','students\contact_msgController@save');
Route::get('/std_about','students\std_mainController@about');

//applied papers routes
Route::get('/app', 'students\appController@index');
Route::post('/deptYear', 'students\appController@manage');

