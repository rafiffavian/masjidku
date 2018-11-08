<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mosque_Donation;
use Datatables;

class DonationController extends Controller
{
    public function index()
    {	
    	// $listDonasi = Mosque_Donation::all();
    	// return view('admin.donation-masjid-table',compact('listDonasi'));
        return view('admin.donation-masjid-table');
    }
    public function create()
    {
    	return view('admin.donation-masjid-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'minimal' => 'required',
    		'id_master_donations' => 'required',
    		'status' => 'required',
    		'keterangan' => 'required'

    	]);

    	Auth::user()->masjid->Donasi()->create($request->except('_token'));
    	return redirect(route('admin.donation'));
    }
    public function edit(Request $request, $id)
    {
    	$tipeDonasi = Auth::user()->masjid->Donasi()->findOrFail($id);
    	return view('admin.donation-masjid-edit',[

    		'tipe' => $tipeDonasi
    	]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([

            'minimal' => 'required',
            'id_master_donations' => 'required',
            'status' => 'required',
            'keterangan' => 'required'
        ]);
        $kitaBisa = Auth::user()->masjid->Donasi()->findOrFail($id);
        $kitaBisa->fill($request->except(['_token','_method']))->save();
        return redirect(route('admin.donation'));
    }
    public function getJasonData(Request $request)
    {
        return Datatables::of(Auth::user()->masjid->Donasi())->make(true);
    }
}
