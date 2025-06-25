<?php

use Illuminate\Support\Facades\Route;
use App\Models\productmodel;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\hospitalController;

//http://127.0.0.1:8000/Guestpage
Route::get('/Guestpage', function () {
    return view('homepage');
});

//http://127.0.0.1:8000/index
Route::get('/index', function () {
    return view('homepage-after');
});
//http://127.0.0.1:8000/Damn
Route::get('/Damn', function () {
    return view('home');
});

////http://127.0.0.1:8000/signin

Route::get('/signin', function () {
    return view('/signin-page');
});

//http://127.0.0.1:8000/profile

Route::get('/profile', function () {
    return view('/profile');
}); 

//http://127.0.0.1:8000/profile_edit

Route::get('/profile-edit', function () {
    return view('profile-edit');
});

//http://127.0.0.1:8000/reciept

Route::get('/reciept',function(){
    return view('/reciept');
});

//http://127.0.0.1:8000/appointment

Route::get('/appointment', function () {
    return view('appointment');
});

//http://127.0.0.1:8000/Partner-hospital

Route::get('/Partner-hospital', [homecontroller::class, 'partner']);
//This 2 are connecting each other
Route::get('/h/{hname}/{hid}', [hospitalController::class, 'hospitaldetail']);


//http://127.0.0.1:8000/user_appointment
Route::get('/user_appointment', function() {
    return view('appointment_detail');
});

//http://127.0.0.1:8000/subscription
Route::get('/subscription', function() {
    return view('subscrition_hospital');
});

//http://127.0.0.1:8000/h_dashboard
Route::get('/h_dashboard', function() {
    return view('hospital_dashboard');
});


//http://127.0.0.1:8000/feedback
Route::get('/feedback', function() {
    return view('feedback');
});


//http://127.0.0.1:8000/Our
Route::get('/Our', function() {
    return view('Our');
});