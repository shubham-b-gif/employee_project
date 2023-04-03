<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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


Route::group(['middleware'=>"web"],function(){
    // Route::get('/', function () {
    //     return view('welcome');
    // });
    Route::get('/', [EmployeeController::class, 'showdata']);
    Route::get('/Form', [EmployeeController::class, 'Showpage']);
    Route::post('insertdata', [EmployeeController::class, 'insert']);
    Route::get('update/{id}', [EmployeeController::class, 'update'])->name('update');
    Route::put('saveupdata/{id}', [EmployeeController::class, 'saveupdate'])->name('updatedata');
    Route::get('deletedata/{id}', [EmployeeController::class, 'delete'])->name('deletedata');
});