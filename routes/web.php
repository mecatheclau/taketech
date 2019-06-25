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
Route::get('contact_us', function () {
    return view('contact_us');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('checkpayment/viewslip','BankSlipController@viewslip');
Route::any('checkpayment/student-no','BankSlipController@search');
Route::any('exportdata/saveexcel/{q}','BankSlipController@exportExcel');
Auth::routes();
Route::resource('bankslip','BankSlipController');
//Route::get('/home', 'HomeController@index')->name('home');
