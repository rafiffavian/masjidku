<?php

namespace App\Http\Controllers\Admin;

use App\kajianku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jadwalKajianController extends Controller
{
    public function index()
    {
    	return view('admin.jadwal-kajian-table');
    }
    public function create()
    {
    	return view('admin.jadwal-kajian-form-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'pengisi_acara' => 'required',
    		'tema' => 'required',
    		'kategori' => 'required',
    		'date' => 'required'
    	]);

    	Auth::user()->masjid->jadwalKajianKu()->create($request->except('_token'));
    	return redirect(route('admin.jadwal.kajian'));
    }
     public function edit(Request $request, $idku)
    {
    	// cara pertama nyari id
    	// $jadwal = FridaySchedule::findOrFail($idjadwal);//findorfail itu untuk mencari id kalo gadapet brarti eror
    	//cara kedua
    	$jadwal = Auth::user()->masjid->jadwalKajianKu()->findOrFail($idku);

    	return view('admin.jadwal-kajian-form-edit',[
    		'jadwalsaya' => $jadwal
    ]);

  }
    public function update(Request $request, $id)
    {
    	$request->validate([

    		'pengisi_acara' => 'required',
    		'tema' => 'required',
    		'kategori' => 'required',
    		'date' => 'required'
    	]);
    	$jadwalku = Auth::user()->masjid->jadwalKajianKu()->findOrFail($id);
    	$jadwalku->fill($request->except(['_token','_method']))->save();
    	return redirect(route('admin.jadwal.kajian'));
    }
}
