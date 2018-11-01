<?php

namespace App\Http\Controllers;

use App\FridaySchedule;
use App\Mosque;
use App\kajianku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasjidController extends Controller
{
    public function index()
    {
    	$listMasjid = Mosque::all();

    	return view('masjid', compact('listMasjid')); //catatan, $listMasjid harus sama dengan compact listMasjid
    } 

    public function detail(Request $request, $id)
    {
    	 $masjidgua = Mosque::findOrFail($id);
    	 $kajiansaya = kajianku::where('id_mosque',$id)->get();
    	 $jumatsaya = FridaySchedule::where('id_mosque',$id)->get();

    	  return view('masjid-detail',compact(['masjidgua','kajiansaya','jumatsaya']));
    }

    public function jadwalkajian($value='')
    {
      $listKajian = kajianku::orderBy('date')-> get();

    	return view('jadwal-kajian', compact('listKajian')); //catatan, $listMasjid harus sama dengan compact listMasjid
    }

}
