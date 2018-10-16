<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mosque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MosqueProfileController extends Controller
{
	public function index()
	{
		return view('admin.profile-masjid');
	}
    public function save(Request $request)//ada inputan dari user dari form nya makanya pake request
    {
    	$request->validate([
    		'name' => 'required|min:3|max:100',//required wajib diisi 3
    		'phone' => 'required|numeric|min:10',
    		'latitude' => 'required|numeric',
    		'longtitude' => 'required|numeric',
    		'address' => 'required',
    		'description' => 'required'
    	]);

    	//cara1
    	// $id_masjid_user = Auth::user()->mosque_id;//Auth nya harus di find use dulu!!!!
    	// if($id_masjid_user == null){
    	// 	//create_function(args, code)e
    	// 	$masjid 			= new Mosque;//itu mosque nya udah gua ctr shift p. trus find use
    	// 	$masjid->name 		= $request->name; //itu yang name disebelah kiri dari hasil tanda panah itudari field si database, kalo sebelah kanan sama kayak yg diatas!!
    	// 	$masjid->phone 		= $request->telepon;
    	// 	$masjid->latitude 	= $request->latitude;
    	// 	$masjid->long2ip(proper_address)titude = $request->longtitude;
    	// 	$masjid->address 	= $request->alamat;
    	// 	$masjid->save();

    	// 	//UPdate tabel user seting id masjid dengan id masjid yg baru diinsert
    	// 	Auth::user()->mosque_id = $masjid->id;
    	// 	Auth::user()->save();
    	// }
    	// else{
	    // 	//UPDATE
	    // 	//ambil data masjid sesuai dengan id masjid yang dimiliki oleh user sedang login
	    // 	$masjid 			= Mosque::find(Auth::user()->mosque_id); //itu mosque_id itu sesuai field database
	    // 	$masjid->name 		= $request->name; //itu yang name dari hasil tanda panah itudari field si database!!
	    // 	$masjid->phone 		= $request->telepon;
	    // 	$masjid->latitude 	= $request->latitude;
	    // 	$masjid->longtitude = $request->longtitude;
	    // 	$masjid->address 	= $request->alamat;
	    // 	$masjid->save();
	    // }

	    //cara3
	    if(!Auth::user()->masjid){

	    	$masjid = new Mosque;
	    	$masjid->fill($request->except('_token'))->save();
	    	Auth::user()->mosque_id = $masjid->id;
	    	Auth::user()->save();
	    }
	    else{
	    	// Auth::user()->masjid->fill($request->except('_token'))->save();
	    	// Auth::user()->masjid->fill($request->only(['name','phone']))->save();//jadi yg ke update cuman telepon doang
	    	Auth::user()->masjid->fill($request->except('_token'))->save();

	    }
	    return redirect(route('admin.profile.masjid'));
	}
}
