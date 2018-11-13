<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mosque_member;

class MemberController extends Controller
{
    public function index()
    {
    	$member = Mosque_member::all();

    	return view('admin.member-masjid-table',compact('member'));
    }
    public function create()
    {
    	return view('admin.member-masjid-create');
    }
    public function store(Request $request)
    {
    	$request->validate([

    		'name' => 'required',
    		'position' => 'required',
    		'phone' => 'required',
    		'email' => 'required'

    	]);
    	Auth::user()->masjid->mosqueMember()->create($request->except('_token'));
    	return redirect(route('admin.member'));
    }
    public function edit(Request $request, $id)
    {
		$membermasjid = Auth::user()->masjid->mosqueMember()->findOrFail($id);
		return view('admin.member-masjid-edit',[

			'member' => $membermasjid
		]);    	
    }
    public function update(Request $request, $id)
    {
    	$request->validate([

    		'name' => 'required',
    		'position' => 'required',
    		'phone' => 'required',
    		'email' => 'required'

    	]);

    	$memberkuy = Auth::user()->masjid->mosqueMember()->findOrFail($id);
        $memberkuy->fill($request->except(['_token','_method']))->save();
        return redirect(route('admin.member'));
    }
}
