<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


//Quiz 

Route::get('/quiz', 'QuizController@index');
Route::post('/quiz/{id}', 'RegistrationController@show');




















Route::get('/register', 'RegistrationController@show')->name('register')->middleware('guest');
Route::get('/login', 'LoginController@show')->name('login')->middleware('guest');

Route::post('/register', 'RegistrationController@register');
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@authenticate']);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/courseupload','CourseUploadController@index')->name('courseupload');

Route::post('/course-store','CourseUploadController@store');
Route::get('/course/{article}','CourseUploadController@show');
Route::get('/categories','CourseUploadController@category');
Route::get('/business','CourseUploadController@business');
Route::get('/health','CourseUploadController@health');
Route::get('/marketing','CourseUploadController@marketing');
Route::get('/photo','CourseUploadController@photo');
Route::get('/search','CourseUploadController@search');
Route::get('/enrolled/{article}','CourseUploadController@enrolled');


//Enrolment

Route::get('/enroll','CourseUploadController@enroll');
Route::get('/mycourses/{id}','CourseUploadController@mycourses')->name('enroll');


Route::middleware('auth')->group(function(){

Route::post('/courses/{id}/enroll', 'FollowsController@store')->name('course');

});


//profile
/*Route::get('/profile','ProfileController@index');
Route::post('/profile-store', 'ProfileController@store');
Route::get('/editprofile','ProfileController@show')->name('editpro');
Route::get('/edit','ProfileController@edit')->name('editt');
Route::put('/editprofile','ProfileController@update');*/
Route::get('/editprofile','ProfileController@index');
Route::post('/profile/store','ProfileController@store');
Route::get('/profile/create','ProfileController@create');
Route::get('/profile/{article}', 'ProfileController@show');
Route::get('/profile/{article}/edit', 'ProfileController@edit');
Route::put('/profile/{article}', 'ProfileController@update');

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/teach', function () {
    return view('teach');
});

Route::get('/form', function () {
    return view('uploadcourse');
});

Route::post('/submit','CourseController@save');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/file','FileController@index')->name('viewfile');
Route::get('/file/upload','FileController@create')->name('formfile');
Route::post('/file/upload','FileController@store')->name('uploadfile');

//courses upload

