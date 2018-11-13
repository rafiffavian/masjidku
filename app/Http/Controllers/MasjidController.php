<?php

namespace App\Http\Controllers;

use App\FridaySchedule;
use App\Mosque;
use App\kajianku;
use App\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasjidController extends Controller
{

    public function beranda()
    {
      return view('beranda');
    }

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
      $listKajian = kajianku::orderBy('date')->get();

    	return view('jadwal-kajian', compact('listKajian')); //catatan, $listMasjid harus sama dengan compact listMasjid
    }

    public function detailkajian(Request $request, $id)
    {
      $listkajian = kajianku::findOrFail($id);
      return view('detail-kajian', compact('listkajian'));
    }

    public function artikel(){
      $listartikel = Artikel::all();
      return view('artikel',compact('listartikel'));
    }

    // public function detailkajian(Request $request, $id)
    // {
    //   $listka = kajianku::findOrFail($id);
    //
    //   return view('detail-kajian',compact('kajiansaya'));
    // }

}
