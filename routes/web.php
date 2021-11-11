<?php

use App\Http\Controllers\Logout;
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

Route::get('/', function () {
  return view('auth.welcome');
});

Route::get('register', function () {
  return view('auth.reglive');
});

Route::middleware(['restrict'])->group(function () {
  Route::get('addstudent', function () {
    return view('admin.student');
  });
  Route::get('editstudent', function () {
    return view('admin.student');
  });
  Route::get('addteacher', function () {
    return view('admin.teacher');
  });
  Route::get('addcourse', function () {
    return view('admin.course');
  });
});

Route::middleware(['schedule'])->group(function () {
  route::get('schedule', function () {
    return view('schedule');
  });
});

route::get('logout', [Logout::class, 'logout']);
