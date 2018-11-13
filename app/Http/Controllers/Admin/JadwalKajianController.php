<?php

namespace App\Http\Controllers\Admin;

use App\Kajianku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Datatables;

class JadwalKajianController extends Controller
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
    public function getJsonData(Request $request)
    {
        return Datatables::of(Auth::user()->masjid->jadwalKajianKu())
        ->addColumn('action', function(Kajianku $Kajianku){

            $url = [];

            $url['detail'] = null;
            $url['edit'] = route('admin.jadwal.kajian.edit', $Kajianku->id);
            $url['delete'] = route('admin.jadwal.kajian.delete', $Kajianku->id);

            return $url;
        })

        ->make(true);
    }
    public function delete(Request $request, $id)
    {
        $kajian = Auth::user()->masjid->jadwalKajianKu()->findOrFail($id);
        $kajian->delete();
        return response()->json(['message'=>'Berhasil menghapus data']);
    }
}
