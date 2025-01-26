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

Route::get('/register', 'RegisterController@create')->name('register');
Route::post('register', 'RegisterController@store')->name('register');
 
Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store')->name('login');
Route::match(['get','post'],'/logout', 'LoginController@destroy')->name('logout');

#User - Index
Route::get('/index','IndexController@index')->name('index');
Route::get('/index','IndexController@showcuisine');

#User - Profile
Route::match(['get','post','put'],'/profile{id}','IndexController@userdetailedit');
Route::match(['get','post','put'],'/update-profile{id}','IndexController@updateprofile')->name('profile');

#User - About
Route::get('/about','AboutController@aboutfeedback');

#User - Contact Us
Route::match(['get','post'],'/contact-us','ContactUsController@index')->name('contact');

#User - Feedback
Route::match(['get','post'],'/feedback','UserFeedbackController@index')->name('feedback');

#User - Cuisine
Route::get('/usercuisine','UserCuisineController@index')->name('usercuisine');

#User - Cart
Route::get('/cart', 'CartController@index');


#forgetpassword
Route::get('/forget','ForgetPasswordController@forget')->name('forgetpassword');
Route::post('/forget','ForgetPasswordController@password');
Route::put('/sendOtp','ForgetPasswordController@sendOtp');
Route::post('checkotp','ForgetPasswordController@checkotp')->name('checkotp');
Route::post('/savepassword','ForgetPasswordController@savepassword')->name('savepassword');
Route::get('confirmotp','ForgetPasswordController@confirmotp')->name('confirmotp');
Route::get('/newpassword','ForgetPasswordController@newpassword');

#Admin
Route::group(['middleware' => ['auth','admin']], function () 
{
    #Role
    Route::get('/dashboard','admin\DashboardController@registered')->name('registered');
    Route::get('dashboard/fetch_data', 'admin\DashboardController@fetch_data')->name('registered');
    Route::get('/role-edit{id}','admin\DashboardController@registeredit')->name('admin.registeredit');
    Route::put('/role-register-update{id}','admin\Dashboardcontroller@registerupdate');
    Route::match(['get','','put','delete'],'/role-delete{id}','admin\Dashboardcontroller@registerdelete');

    #Admin - Profile
    Route::match(['get','post','put'],'/admin-profile{id}','admin\DashboardController@admindetailedit');
    Route::match(['get','post','put'],'/admin-update-profile{id}','admin\DashboardController@updateadminprofile')->name('admin.adminprofile');

    #Cuisine
    Route::get('/main-cuisine','admin\CuisineController@index');
    Route::match(['get','post'],'/add-cuisine','admin\CuisineController@addCuisine')->name('admin.cuisine');
    Route::get('add-cuisine/fetch_data', 'admin\CuisineController@fetch_data')->name('admin.cuisine');
    Route::match(['get','post','delete'],'/delete-cuisine/{id}','admin\CuisineController@delCuisine');
    Route::match(['get','post','put'],'/edit-cuisine{id}','admin\CuisineController@editCuisine')->name('admin.editcuisine');

    #Dishes
    Route::get('/main-dishes','admin\DishController@index')->name('admin.dish');
    Route::get('main-dishes/fetch_data', 'admin\DishController@fetch_data')->name('admin.dish');
    Route::match(['get','post'],'/add-dish','admin\DishController@addDish')->name('admin.dish');
    Route::match(['get','post','delete'],'/delete-dish/{id}','admin\DishController@delDish');
    Route::match(['get','post','put'],'/edit-dish{id}','admin\DishController@editDishes');
    Route::match(['get','post','put'],'/update-dish{id}','admin\DishController@updateDishes')->name('admin.editdishes');

    #Feedbacks
    Route::get('/main-feedbacks','admin\FeedbackController@index')->name('admin.feedback');
    Route::get('main-feedbacks/fetch_data', 'admin\FeedbackController@fetch_data')->name('admin.feedback');
    Route::match(['get','post','delete'],'/delete-feedback/{id}','admin\FeedbackController@delFeedback');

    #Contact - Us
    Route::get('/main-contact-us','admin\ContactUsController@index')->name('admin.contactus');
    Route::get('main-contact-us/fetch_data', 'admin\ContactUsController@fetch_data')->name('admin.contactus');
    Route::match(['get','post','delete'],'/delete-contact-us/{id}','admin\ContactUsController@delcontactus');
});
