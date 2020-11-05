<?php

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
});
//檢視所有球隊資料

Route::get('/', function () {
    return view('welcome');
Route::get('teams',function() {
    return view('');
        });

//檢視所有球隊資料
Route::get('player', function() {
    return view."player.";
});

//檢視所有球隊資料
Route::get('teams',function() {
    return view('');
});

