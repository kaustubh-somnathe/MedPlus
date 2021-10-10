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
use Illuminate\Support\Facades\Input;
use App\med_dictionary;



Route::get('/', function () {
    return view('website.index');
});
Route::get('department', function () {
    return view('website.department');
});
Route::get('webregister', function () {
    return view('auth.webregister');
});
Route::get('/user/home', function () {
    return view('user.home');
});


//Admin Routes
Route::get('/admin', function () {
    return \View::make('/auth/login');
});

Auth::routes();
// Route for exceptional handling for logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    

Route::get('/home', 'AdminController@home')->name('home');
Route::get('/userlist', 'AdminController@userlist')->name('userlist');
Route::get('/customerlist', 'AdminController@customerlist')->name('customerlist');
Route::get('/viewcustomer/{id}', 'AdminController@viewcustomer')->name('viewcustomer');
Route::get('/listorder', 'AdminController@orderlist')->name('listorder');
Route::get('/vieworder/{id}', 'AdminController@vieworder')->name('vieworder');
Route::get('/med_dictionary', 'AdminController@med_dictionary')->name('med_dictionary');
Route::post('/med_dictionary', 'AdminController@med_dictionary')->name('medicine.submit');

Route::get('userlogin', 'UserController@userauth')->name('userlogin');
Route::get('viewmeds', 'UserController@viewmeds')->name('viewmeds');




Route::post('/webregister', 'HomeController@webregister')->name('webregister.submit');
Route::get('/weblogin', 'HomeController@weblogin')->name('weblogin');

Route::get('/otp', 'HomeController@webregister')->name('otp');

Route::post('/otp', 'HomeController@otpverify')->name('otpverify.submit');
Route::get('/otp', 'HomeController@otpverify')->name('otp');

Route::get('/verifymsg', 'HomeController@otpverify')->name('verifymsg');

Route::post('/department', 'HomeController@noverify')->name('number.submit');
Route::get('/prescription', 'HomeController@noverify')->name('prescription');
Route::get('/notverify', 'HomeController@noverify')->name('notverify');

Route::post('/prescription', 'HomeController@order')->name('order.submit');
Route::get('/prescriptionOTP', 'HomeController@order')->name('prescriptionOTP');
Route::post('/prescriptionOTP', 'HomeController@potpverify')->name('verify.submit');
Route::get('/orderplace', 'HomeController@potpverify')->name('orderplace');






// Route::any('/search',function(){
//     $q = Input::get ( 'q' );
//     $med = med_di ctionary::where('med_name','LIKE','%'.$q.'%')->get();
//     if(count($med) > 0)
//         return view('website.search')->withDetails($med)->withQuery ( $q );
//     else return view ('website.search')->withMessage('No Details found. Try to search again !');
// });