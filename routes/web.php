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
Route::get('/masjid', 'MasjidController@index')->name('masjid');
Route::get('/masjid/{id}/detail-masjid', 'MasjidController@detail')->name('masjid.detail');
Route::middleware(['auth','dkm'])->group(function(){
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/admin/jadwal/shalat-jumat','Admin\JadwalShalatJumatController@index' )->name('admin.jadwal.shalat-jumat');//buat nampilin table

    Route::get('/admin/jadwal/shalat-jumat/create','Admin\JadwalShalatJumatController@create' )->name('admin.jadwal.shalat-jumat.create');
    Route::post('/admin/jadwal/shalat-jumat/store','Admin\JadwalShalatJumatController@store' )->name('admin.jadwal.shalat-jumat.store');
    Route::get('/admin/jadwal/shalat-jumat/{id}/edit','Admin\JadwalShalatJumatController@edit' )->name('admin.jadwal.shalat-jumat.edit');
    Route::put('/admin/jadwal/shalat-jumat/{id}/edit','Admin\JadwalShalatJumatController@update' )->name('admin.jadwal.shalat-jumat.update');//put itu buat method edit/update
    Route::get('/admin/jadwal/kajian', 'Admin\jadwalKajianController@index')->name('admin.jadwal.kajian');

    Route::get('/admin/jadwal/kajian/create', 'Admin\jadwalKajianController@create')->name('admin.jadwal.kajian.create');
    Route::post('/admin/jadwal/kajian/store', 'Admin\jadwalKajianController@store')->name('admin.jadwal.kajian.store');
    Route::get('/admin/jadwal/kajian/{id}/edit', 'Admin\jadwalKajianController@edit')->name('admin.jadwal.kajian.edit');
    Route::put('/admin/jadwal/kajian/{id}/edit','Admin\JadwalKajianController@update' )->name('admin.jadwal.kajian.update');//put itu buat method edit/update
    Route::get('/admin/akuntansi/catatan-keuangan', 'Admin\CatatanKeuanganController@index')->name('admin.akuntansi.catatan-keuangan');
    Route::get('/admin/akuntansi/catatan-keuangan/create', 'Admin\CatatanKeuanganController@create')->name('admin.akuntansi.catatan-keuangan.create');
    Route::post('/admin/akuntansi/catatan-keuangan/store', 'Admin\CatatanKeuanganController@store')->name('admin.akuntansi.catatan-keuangan.store');
});
Route::middleware(['auth'])->group(function(){
	Route::get('/admin/profile', 'Admin\MosqueProfileController@index')->name('admin.profile.masjid');
	Route::post('/admin/profile/masjid/save', 'Admin\MosqueProfileController@save')->name('admin.profile.masjid.save');
});


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

