<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-demo', function() {
	getParams();
});
   
Route::post('/post-form-urlencode', function() {
	echo 11;
});


Route::post('/post-form-data', function() {
	echo 11;
});

Route::post('/post-json', function() {
	echo 11;
});

function getParams() {
	print_r($_GET);
	$id = $_GET['id'];
	$name = $_GET['name'];
	echo $id . ' ' . $name;
}