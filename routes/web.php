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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('publichomepage');
});
Route::get('account/admin', function () {
    if (Auth()->check() && auth::user()->role == 1) {
		return view('admin/homepage');
	}else{
		return redirect()->route('login');
	}
});

Route::get('account/staff', function () {
    if (Auth()->check() && auth::user()->role == 2) {
		return view('staff/homepage');
	}else{
		return redirect()->route('login');
	}
});
Route::get('account/end_user', function () {
	if (Auth()->check() && auth::user()->role == 3) {
		return view('end_user/homepage');
	}else{
		return redirect()->route('login');
	}
});
Route::get('checkpayment/viewslip','BankSlipController@viewslip');
Route::get('checkpayment/student-no','BankSlipController@search');
Auth::routes();
Route::resource('bankslip','BankSlipController');
//Route::get('/home', 'HomeController@index')->name('home');
