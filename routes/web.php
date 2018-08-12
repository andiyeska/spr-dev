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

Route::get('/', 'HomeController@index')->name('home.index')->middleware('home');
Route::get('/about-us', 'HomeController@aboutUs')->name('home.aboutUs')->middleware('home');
Route::get('/fun-run', 'HomeController@funRun')->name('home.funRun')->middleware('home');
Route::get('/festival', 'HomeController@festival')->name('home.festival')->middleware('home');
Route::get('/news', 'HomeController@news')->name('home.news')->middleware('home');
Route::get('/news/{id}', 'HomeController@newsRead')->middleware('home');
Route::get('/signin', 'HomeController@signIn')->name('home.signIn')->middleware('home');
Route::post('/signup/submit', 'HomeController@signUpSubmit')->middleware('home');
Route::get('/activate', 'HomeController@signUpConfirmation')->middleware('home');
Route::post('/signin/submit', 'HomeController@signInSubmit')->middleware('home');
Route::get('/signout', 'HomeController@signOut')->name('home.signOut');

Route::group(['prefix' => '/user', 'middleware' => 'u'], function() {
	
	Route::get('/profile', 'UserController@profile')->name('user.profile');
	Route::post('/profile/update', 'UserController@profileUpdate');
	
	Route::get('/register/event', 'UserController@registerEvent')->name('user.register.event');
	Route::post('/register/event', 'UserController@registerEventSubmit');
	Route::post('/register/event/submit', 'UserController@checkOutSubmit');
	
	Route::get('/order/{registrationCode}', 'UserController@orderDetails')->name('user.order.details');
	Route::post('/payment/upload/{registrationCode}', 'UserController@uploadPaymentProof');
});

Route::group(['prefix' => '/eod', 'middleware' => 'sawr'], function() {

	Route::get('/', 'EodController@index')->name('eod.index');
	
	Route::get('/users', 'EodController@users')->name('eod.users')->middleware('s');
	Route::post('/admin/add', 'EodController@adminAdd')->middleware('s');
	Route::post('/admin/reset', 'EodController@adminReset')->middleware('s');
	Route::post('/admin/delete', 'EodController@adminDelete')->middleware('s');
	
	Route::get('/events', 'EodController@events')->name('eod.events')->middleware('s');
	Route::post('/event/add', 'EodController@eventAdd')->middleware('s');
	Route::post('/event/update', 'EodController@eventUpdate')->middleware('s');
	
	Route::get('/payments', 'EodController@payments')->name('eod.payments')->middleware('a');
	Route::post('/payments/approval', 'EodController@paymentsApproval')->middleware('a');
	
	Route::get('/attendance', 'EodController@attendance')->name('eod.attendance')->middleware('a');
	Route::post('/attendance/attend', 'EodController@attendanceAttend')->middleware('a');
	
	Route::get('/participant', 'EodController@participant')->name('eod.participant')->middleware('a');
	
	Route::get('/publication', 'EodController@publication')->name('eod.publication')->middleware('a');
	Route::post('/publication/add', 'EodController@publicationAdd')->middleware('a');
	Route::post('/publication/update', 'EodController@publicationUpdate')->middleware('a');

	Route::get('/articles', 'EodController@articles')->name('eod.articles')->middleware('wr');
	Route::get('/articles/new', 'EodController@articlesNew')->name('eod.articles.new')->middleware('wr');
	Route::post('/articles/new/submit', 'EodController@articlesNewSubmit')->middleware('wr');
	Route::get('/articles/edit/{id}', 'EodController@articlesEdit')->middleware('wr');
	Route::post('/articles/edit/submit', 'EodController@articlesEditSubmit')->middleware('wr');
	Route::post('/articles/delete', 'EodController@articlesDelete')->middleware('wr');

});

Route::get('/eod/signin', 'EodController@signIn')->name('eod.signIn');
Route::post('/eod/signin', 'EodController@signInSubmit');
Route::get('/eod/signout', 'EodController@signOut');
