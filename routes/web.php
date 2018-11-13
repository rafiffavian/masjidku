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

Route::get('/', 'MasjidController@beranda')->name('beranda');
Route::get('/masjid', 'MasjidController@index')->name('masjid');
Route::get('/masjid/{id}/detail-masjid', 'MasjidController@detail')->name('masjid.detail');
Route::get('/jadwalkajian', 'MasjidController@jadwalkajian')->name('jadwalkajian');
Route::get('/jadwalkajian/{id}/detail-kajian', 'MasjidController@detailkajian')->name('detailkajian');
Route::get('/artikel','MasjidController@artikel')->name('masjid.artikel');

		Route::middleware(['auth'])->group(function(){
		Route::get('/admin/profile', 'Admin\MosqueProfileController@index')->name('admin.profile.masjid');
		Route::post('/admin/profile/masjid/save', 'Admin\MosqueProfileController@save')->name('admin.profile.masjid.save');
		});

		Route::middleware(['auth','dkm'])->group(function(){
		Route::get('/home', 'HomeController@index')->name('home');

		Route::get('/admin/jadwal/shalat-jumat','Admin\JadwalShalatJumatController@index' )->name('admin.jadwal.shalat-jumat');//buat nampilin table
    Route::get('/admin/jadwal/shalat-jumat/create','Admin\JadwalShalatJumatController@create' )->name('admin.jadwal.shalat-jumat.create');
    Route::post('/admin/jadwal/shalat-jumat/store','Admin\JadwalShalatJumatController@store' )->name('admin.jadwal.shalat-jumat.store');
    Route::get('/admin/jadwal/shalat-jumat/{id}/edit','Admin\JadwalShalatJumatController@edit' )->name('admin.jadwal.shalat-jumat.edit');
    Route::put('/admin/jadwal/shalat-jumat/{id}/edit','Admin\JadwalShalatJumatController@update' )->name('admin.jadwal.shalat-jumat.update');//put itu buat method edit/update
		Route::get('/admin/jadwal/shalat-jumat/getJsonData','Admin\jadwalShalatJumatController@getJsonData')->name('admin.jadwal.shalat-jumat.getJsonData');

    Route::get('/admin/jadwal/kajian', 'Admin\jadwalKajianController@index')->name('admin.jadwal.kajian');
    Route::get('/admin/jadwal/kajian/create', 'Admin\jadwalKajianController@create')->name('admin.jadwal.kajian.create');
    Route::post('/admin/jadwal/kajian/store', 'Admin\jadwalKajianController@store')->name('admin.jadwal.kajian.store');
    Route::get('/admin/jadwal/kajian/{id}/edit', 'Admin\jadwalKajianController@edit')->name('admin.jadwal.kajian.edit');
    Route::put('/admin/jadwal/kajian/{id}/edit','Admin\JadwalKajianController@update' )->name('admin.jadwal.kajian.update');//put itu buat method edit/update
		Route::get('/admin/jadwal/kajian/getJsonData','Admin\jadwalKajianController@getJsonData')->name('admin.kajian.getJsonData');

    Route::get('/admin/akuntansi/catatan-keuangan', 'Admin\CatatanKeuanganController@index')->name('admin.akuntansi.catatan-keuangan');
    Route::get('/admin/akuntansi/catatan-keuangan/create', 'Admin\CatatanKeuanganController@create')->name('admin.akuntansi.catatan-keuangan.create');
    Route::post('/admin/akuntansi/catatan-keuangan/store', 'Admin\CatatanKeuanganController@store')->name('admin.akuntansi.catatan-keuangan.store');
    Route::get('/admin/akuntansi/catatan-keuangan/{id}/edit', 'Admin\CatatanKeuanganController@edit')->name('admin.akuntansi.catatan-keuangan.edit');
    Route::put('/admin/akuntansi/catatan-keuangan/{id}/update', 'Admin\CatatanKeuanganController@update')->name('admin.akuntansi.catatan-keuangan.update');
		Route::delete('/admin/akuntansi/catatan-keuangan/{id}/delete','Admin\CatatanKeuanganController@destroy')->name('admin.akuntansi.catatan-keuangan.delete');
    Route::get('/admin/akuntansi/catatan-keuangan/getJsonData', 'Admin\CatatanKeuanganController@getJsonData')->name('admin.akuntansi.catatan-keuangan.getJsonData');

    Route::get('/admin/image', 'Admin\ImageController@index')->name('admin.image');
    Route::get('/admin/image/create', 'Admin\ImageController@create')->name('admin.image.create');
    Route::post('/admin/image/store', 'Admin\ImageController@store')->name('admin.image.store');
		Route::get('/admin/image/getJsonData', 'Admin\ImageController@getJsonData')->name('admin.image.getJsonData');

    Route::get('/admin/member', 'Admin\MemberController@index')->name('admin.member');
    Route::get('/admin/member/create', 'Admin\MemberController@create')->name('admin.member.create');
    Route::post('/admin/member/store','Admin\MemberController@store')->name('admin.member.store');
    Route::get('/admin/member/{id}/edit', 'Admin\MemberController@edit')->name('admin.member.edit');
    Route::put('/admin/member/{id}/update', 'Admin\MemberController@update')->name('admin.member.update');

    Route::get('/admin/donation', 'Admin\DonationController@index')->name('admin.donation');
    Route::get('/admin/donation/create', 'Admin\DonationController@create')->name('admin.donation.create');
    Route::post('/admin/donation/store', 'Admin\DonationController@store')->name('admin.donation.store');
    Route::get('/admin/donation/{id}/edit', 'Admin\DonationController@edit')->name('admin.donation.edit');
    Route::put('/admin/donation/{id}/update', 'Admin\DonationController@update')->name('admin.donation.update');
    Route::get('/admin/donation/getJasonData', 'Admin\DonationController@getJasonData')->name('admin.donation.getJasonData');
		});

		Route::middleware(['auth','dkm'])->group(function(){
			Route::get('/admin/article', 'Admin\ArticleController@index')->name('admin.article');
			Route::get('/admin/article/create','Admin\ArticleController@create')->name('admin.article.create');
			Route::post('/admin/article/store','Admin\ArticleController@store')->name('admin.article.store');
			// Route::get('/admin/article/{id}/edit', 'Admin\ArticleController@edit')->name('admin.article.edit');

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
