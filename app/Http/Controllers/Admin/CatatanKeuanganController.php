<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Finance;
use App\FinanceType;
use App\Keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
}
