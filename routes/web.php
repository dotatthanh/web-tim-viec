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

Route::get('/','UserController@home')->name('home');

// Set email of a guest into "mail-guest" table.
Route::post('setEmail', 'MailController@setEmail')->name('setEmail');

// Reply to applying user
Route::post('reply', 'MailController@replyEmail')->name('reply');

Route::get('/login', 'UserController@showLogin')->name('login')->middleware('isLogined');

Route::post('/auth', 'UserController@login')->name('auth');

Route::get('/logout', 'UserController@logout')->name('logout');

Route::get('/signup','UserController@showSignup')->name('showSignup');

Route::post('/sign','UserController@signup')->name('sign');

Route::get('/reset-password','UserController@showResetPassword')->name('reset-password');

Route::put('/change-password','UserController@changePassword')->name('change-password');

Route::put('/forgot-password','UserController@forgotPassword')->name('forgot-password');

Route::get('/findByAddress', 'AddressController@findByAddress');

Route::get('/findByCompany', 'CompanyController@findByCompany');

Route::get('/job', 'JobController@showJob')->name('showJob');

Route::get('/searchJob', 'JobController@searchJob')->name('searchJob');

Route::get('/category/{id}', 'JobController@findByCategory')->name('category');

Route::get('/job-detail/{id}', 'JobController@showJobDetail')->name('jobDetail');

Route::post('/favorite','JobFavoriteController@addJobFavorite');

Route::get('/list-favorite', 'JobFavoriteController@listFavorite')->name('list-favorite');

Route::get('/list-job-applied', 'JobApplyController@listJobApplied')->name('list-job-applied');

Route::delete('/delete-job-favorite','JobFavoriteController@deleteJobFavorite');

Route::get('/form-post-job','JobController@showPostJob')->name('form-post-job')->middleware('recuiter');

Route::post('/signup-company', 'CompanyController@signupCompany')->name('signupCompany');

Route::post('/add-job','JobController@addJob')->name('addJob');

Route::get('/edit-job/{id}','JobController@editJob')->name('editJob');

Route::put('/update-job/{id}','JobController@updateJob')->name('updateJob');

Route::post('/send-cv','UserApplyController@sendCV')->name('sendCV');

Route::get('/my-recruit','UserController@getRecruit')->name('my-recruit')->middleware('recuiter');

Route::delete('/delete-recruit', 'UserController@deleteRecruit');

Route::get('/user-apply/{jobID}','UserApplyController@listUserApply')->name('user-apply')->middleware('recuiter');

Route::get('/edit-info','UserController@formEditInfo')->name('edit-info')->middleware('auth');


Route::post('/mark-as-read','UserController@markAsRead')->name('mark-as-read');

Route::put('/update-info','UserController@updateInfo');
Route::get('/test', 'UserApplyController@test');

Route::group(['prefix' => 'admin', 'middleware' => 'login','as' => 'admin.', 'namespace' => 'Admin'], function () {

	Route::get('/jobs','JobController@index')->name('jobs');
	Route::post('/jobs/destroy/{id}','JobController@destroy')->name('jobs.destroy');
	


	Route::get('/categories', 'CategoryController@index')->name('categories');
	Route::get('/categories/create', 'CategoryController@create')->name('create.category');
	Route::post('/categories/create', 'CategoryController@update');
	Route::post('/categories/destroy/{id}','CategoryController@destroy')->name('categories.destroy');
	Route::get('/categories/edit/{id}', 'CategoryController@getEdit');
	Route::post('/categories/edit/{id}', 'CategoryController@postEdit');


	Route::get('/users','UserController@index')->name('users');
	Route::post('/users/destroy/{id}', 'UserController@destroy')->name('users.destroy');



	Route::get('/companies', 'CompanyController@index')->name('companies');
	Route::post('/companies/destroy/{id}', 'CompanyController@destroy')->name('companies.destroy');
});
