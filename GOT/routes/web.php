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



Route::get('home', function () {
    return view('home');

});





Route::get('StaffCancelAppointment', function () {
    return view('StaffCancelAppointment');

});



Route::get('StaffChangeAppointment', function () {
    return view('StaffChangeAppointment');

});



Route::get('StaffBookAppointment', function () {
    return view('StaffBookAppointment');

});



Route::get('StaffCheckAppointment', function () {
    return view('StaffCheckAppointment');

});


Route::get('StaffDashboard', function () {
    return view('StaffDashboard');

});




Route::get('CheckSpecificStaff', function () {
    return view('CheckSpecificStaff');

});


Route::get('CheckAllStaff', function () {
    return view('CheckAllStaff');

});

Route::get('Test', function () {
    return view('Test');

});

Route::get('BookAppointment', function () {
    return view('BookAppointment');

});



Route::get('PatientDashboard', function () {
    return view('PatientDashboard');

});


Route::get('Registration', function () {
    return view('Registration');

});



Route::get('/', function () {
    return view('home');

});
