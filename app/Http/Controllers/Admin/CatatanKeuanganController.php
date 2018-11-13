<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Finance;
use App\FinanceType;
use App\Keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Datatables;

class CatatanKeuanganController extends Controller
{
    public function index()
    {
    	return view('admin.catatan-keuangan-table');
    }
    public function create()
    {
    	return view('admin.catatan-keuangan-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

            'id_finance_type' => 'required',
            'amount' => 'required',
            'description' => 'required'
        ]);
        Auth::user()->masjid->Keuangan()->create($request->except('_token'));
        return redirect(route('admin.akuntansi.catatan-keuangan'));
    }
    public function edit(Request $request, $id)
    {
        $catatan = Auth::user()->masjid->Keuangan()->findOrFail($id);
        return view('admin.catatan-keuangan-edit',[

        'catatanKu' => $catatan

        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([

            'id_finance_type' => 'required',
            'amount' => 'required',
            'description' => 'required'
        ]);
        $crayonSinchan = Auth::user()->masjid->Keuangan()->findOrFail($id);
        $crayonSinchan->fill($request->except(['_token','_method']))->save();
        return redirect (route('admin.akuntansi.catatan-keuangan'));
    }
    
    public function getJsonData(Request $request)
    {   
        $query = Auth::user()->masjid->Keuangan();
        $query->with('tipeCatatan'); // unntuk mengizinkan relasi nya untuk di eksekusi
        // return Datatables::of($query)->make(true);

        return datatables::of($query)
        ->addColumn('action', function(Finance $finance){

            $url = [];

            $url['detail'] = null;
            $url['edit'] = route('admin.akuntansi.catatan-keuangan.edit', $finance->id);
            $url['delete'] = route('admin.akuntansi.catatan-keuangan.delete', $finance->id);

            return $url;
        })
        ->make(true);
    }
    public function delete(Request $request, $id)
    {
        $catatan = Auth::user()->masjid->Keuangan()->findOrFail($id);
        $catatan->delete();
        return response()->json(['message'=>'Berhasil menghapus data']);
    }
    
}
