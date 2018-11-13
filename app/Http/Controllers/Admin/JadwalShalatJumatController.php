<?php

namespace App\Http\Controllers\Admin;

use App\FridaySchedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Datatables;

class JadwalShalatJumatController extends Controller
{
    public function index()
    {
    	return view('admin.jadwal-shalat-jumat-table');
    }
    public function create()
    {
    	return view('admin.jadwal-shalat-jumat-form-create');
    }  
    public function store(Request $request)
    {
    	$request->validate([
	    	'khatib' => 'required',
	    	'imam' => 'required',
	    	'muadzin' => 'required',
	    	'date' => 'required'
    	]);

    	Auth::user()->masjid->jadwalJumatan()->create($request->except('_token'));

    	return redirect(route('admin.jadwal.shalat-jumat'));
    }

    public function edit(Request $request, $idjadwal)
    {
    	// cara pertama nyari id
    	// $jadwal = FridaySchedule::findOrFail($idjadwal);//findorfail itu untuk mencari id kalo gadapet brarti eror
    	//cara kedua
    	$jadwal = Auth::user()->masjid->jadwalJumatan()->findOrFail($idjadwal);

    	return view('admin.jadwal-shalat-jumat-form-edit',[
    		'jadwalkajian' => $jadwal
    ]);

  }
  	public function update(Request $request, $id)
  	{
  		$request->validate([
	    	'khatib' => 'required',
	    	'imam' => 'required',
	    	'muadzin' => 'required',
	    	'date' => 'required'
    	]);
    	$jadwal = Auth::user()->masjid->jadwalJumatan()->findOrFail($id);
    	$jadwal->fill($request->except(['_token','_method']))->save();
    	return redirect(route('admin.jadwal.shalat-jumat'));
  	}

    public function getJsonData(Request $request)
    {
      return Datatables::of(Auth::user()->masjid->jadwalJumatan()->orderBy('date'))->make(true);
    }
}
