<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        if(Auth::User()->role == 1)
        {
            return view('AdminDashboard.home');
        }
        else 
        {
            return view('SubAdmin.home');
        }
    })->name('dashboard');
   
    Route::get('/addCampus', function () {
        return view('AdminDashboard.AddCampus');
    });
    Route::get('/campdetails', function () {
        return view('AdminDashboard.viewcampus');
    });
    Route::get('/update', function () {
        return view('AdminDashboard.update');
    });
    Route::get('/addStudents', function () {
        return view('SubAdmin.addStudent');
    });
    Route::get('/reqstudent', function () {
        return view('AdminDashboard.reqforstudent');
    });
    // fetch work
    Route::get('/campdetails',[AdminController::class,('fetchcamp')]);
    // insert work
    Route::post('/campusinsert',[AdminController::class,('campusinsert')]);
    Route::post('/stdrequest',[SubAdmin::class,('studentreqinsert')]);
    // delete work 
    Route::get('/campdelete/{id}',[AdminController::class,('campdelete')]);
    // update work
    Route::get('/campupdate/{id}',[AdminController::class,('campupdate')]);
    Route::post('/upcampus/{email}', [AdminController::class,('update')]);


});


