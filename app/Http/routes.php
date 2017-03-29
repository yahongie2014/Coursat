<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Admin
Route::group(['middleware' => ['web','admin']], function () {
Route::auth();
Route::get('/admin', function () {
return view('Admin.index');
});
});
//Teacher
Route::group(['middleware' => ['web','teacher']], function () {
Route::auth();
Route::get('/teacher', function () {
return view('Teacher.index');
});
});
//Student
Route::group(['middleware' => ['web']], function () {
Route::auth();
//login and Signup
Route::get('auth/facebook','Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback','Auth\AuthController@handleProviderCallback');
Route::get('auth/twitter','Auth\AuthController@redirectToProvidertwitter');
Route::get('auth/twitter/callback','Auth\AuthController@handleProvidetwitter');
Route::get('auth/google','Auth\AuthController@redirectToProviderGoogle');
Route::get('auth/google/callback','Auth\AuthController@handleProvideGoogle');
Route::get('auth/github','Auth\AuthController@redirectToProvidergit');
Route::get('auth/github/callback','Auth\AuthController@handleProvidegit');
Route::get('/', function () {
return view('website.index');
});
Route::get('/about.html', function () {
return view('website.about');
});
Route::get('/course.html', function () {
return view('website.course');
});
Route::get('/team.html', function () {
return view('website.team');
});
Route::get('/contact.html', function () {
return view('website.contact');
});
Route::get('/single.html', function () {
return view('website.single');
});
Route::post('/profile/sms.html', array('as' => 'Send_SMS', 'uses' => 'HomeController@sent'));
Route::get('/profile/message.html', array('as' => 'message', 'uses' => 'HomeController@message'));
Route::get('/profile.html/{id}', 'HomeController@Profile');
Route::get('/profile.html/info', 'HomeController@info');
Route::get('/profile.html/info/{id}', array('as' => 'INFO_USE', 'uses' => 'HomeController@info_edit'));
Route::get('/profile.html/info/view', array('as' => 'INFO_VIEW', 'uses' => 'HomeController@View_edit'));
});