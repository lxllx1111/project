<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;//引用控制器
use App\Http\Controllers\ApiController;
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

// Route::get('hellow', function () {
// 	return 'hellowword';
// });

// Route::get('user/{name}',[Admin\UserController::class,'index']);//链接地址,[类名::class,'方法名'];

// Route::get('user', function() {
// 	$id = request('id');//request取出参数值
// 	return 'Hello World your user id is'. $id;
// });
// 


// Route::get('user/{id}', function($id) {
// 	return 'Hello World your user id is'. $id;
// });
// Route::get('',function () {
// 	return view('');
// });

Route::get('/',[ApiController::class,'index']);