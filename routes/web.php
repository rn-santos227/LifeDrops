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

//Index
Route::get('/','IndexController@index');

//Donors
Route::get('/donor', 'DonorController@index');
Route::get('/donor/search', 'DonorController@getData');
Route::get('/dprofile', 'DonorController@loadprofile');

//Donations
Route::get('/donation', 'DonationController@index');

//Recepient
Route::get('/recipient', 'RecipientController@index');
// Route::get('/rprofile', 'RecepientController@loadprofile');

//Admin
Route::get('/admin', 'AdminController@index');
Route::get('/aprofile', 'AdminController@index');
Route::get('/aprofile/brequests', 'AdminController@bankrequest');
Route::get('/aprofile/drequests', 'AdminController@donorrequest');

Route::POST('/donorsched', 'DonationScheduleController@addsched');
Route::post('/brequest', 'BloodRequestController@store');


