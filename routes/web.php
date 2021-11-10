<?php

use GuzzleHttp\Middleware;
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

Route::get('/', function () {return view('welcome');});

Route::get('register', function (){return view('reglive');});

Route::middleware(['restrict'])->group(function () {
  Route::get('addstudent',function(){return view('student');});
  Route::get('editstudent',function(){return view('student');});
  Route::get('addteacher',function(){return view('teacher');});
});
route::get('schedule',function(){return view('schedule');});





