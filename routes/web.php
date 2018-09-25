<?php
use Illuminate\Http\Request;//copy dari api.php

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
//     //return view('welcome');
//     echo "Halaman utama laravel";
// });


// yang baru Tipe1
// Route::get('/{a}/{b}', 'IndexController@index'); //namanya harus sama kayak public function nya yg ada di controller

// Tipe 2
// Route::get('/', 'IndexController@index');
Route::get('show-nama/{nama}', 'IndexController@showNama');
// Route::get('/{a}/{b}/{c}', 'IndexController@manggilView');
Route::get('nilai', 'IndexController@manggilView');
Route::get('/', 'IndexController@manggilBeranda');


// Route::get('penjumlahan/{a}/{b}', function($a, $b){
// 	echo "Hasil penjumlahan $a + $b = ". ($a+$b);
// });

// Route::get('nama/{depan}/{belakang}', function($depan, $belakang){
// 	echo "Hai $depan $belakang";
// });

// Route::get('pembagian/{c}/{d}', function($c, $d){
// 	echo "Hasil Pembagian $c : $d = ". ($c/$d);
// });

// Route::get('perkalian/{e}/{f}', function($e, $f){
// 	echo "Hasil Perkalian $e x $f = ". ($e*$f);
// });

// Route::get('penjumlahan', function(Request $request){
// 	// $_GET['a'];
// 	// $request->a;

// 	echo "Hasil penjumlahan $request->a + $request->b = " .($request->a+$request->b);
// });	

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
