<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // public function index($a, $b)//harus buat function dulu
    // {
    // 	echo "Halaman Utama Dari Controller";
    //
    // 	echo "Hasil Penjumlahan $a + $b = ". ($a+$b);
    //
    // }

    public function index(Request $request)
    {
    	echo "Hasil Penjumlahan $request->a + $request->b = ".($request->a+$request->b);
    }

    public function showNama($nama)
    {
    	echo "nama = $nama";
    }
    // public function manggilView(Request $request)
    // {
    // 	return view('index');
    // }
    public function manggilView(Request $request)
    {
        $namaArray = ['Rafif','Reza','Ressa'];
        $a = $request->bahasa;
        $b = $request->ipa;
        $c = $request->mtk;
        $r = ($a + $b + $c);

    	return view('index', [
    	'a' => $a,
    	'b' => $b,
    	'c' => $c,
        'r' => $r,
        'namaArray' => $namaArray

    ]);
    }
}
