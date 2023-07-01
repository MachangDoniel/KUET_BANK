<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/account',[HomeController::class,'account']);
Route::get('/accountstatement',[HomeController::class,'accountstatement']);
Route::get('/fundtransfer',[HomeController::class,'fundtransfer']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/showappointment',[EmployeeController::class,'showappointment']);
Route::get('/approve/{id}',[EmployeeController::class,'approve']);
Route::get('/cancel/{id}',[EmployeeController::class,'cancel']);
Route::get('/emailview/{id}',[EmployeeController::class,'emailview']);
Route::post('/sendemail/{id}',[EmployeeController::class,'sendemail']);

Route::get('/employeeprofile',[EmployeeController::class,'employeeprofile']);
Route::get('/updateemployeeprofile',[EmployeeController::class,'updateemployeeprofile']);
Route::post('/editemployeeprofile/{id}',[EmployeeController::class,'editemployeeprofile']);
Route::get('/customerservice',[EmployeeController::class,'customerservice']);