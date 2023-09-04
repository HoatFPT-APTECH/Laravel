<?php

use App\Http\Controllers\employeeController;
use App\Http\Controllers\helloController;
use App\Models\employee;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',[helloController::class,'vietcode']);
Route::get('/vonglap',[helloController::class,'showLoop']);
Route::get('/addUser',[helloController::class,'indexCreateForm']);
Route::post('/addUserP',[helloController::class,'createForm']);
Route::group(['prefix'=>"employee"],function(){
   Route::get('index',[employeeController::class,'index']);
   Route::get('create',[employeeController::class,'create']);
   Route::post('store',[employeeController::class,'store']);
   Route::get('edit/{id}',[employeeController::class,'edit']);
   Route::post('update/{id}',[employeeController::class,'update']);

});
