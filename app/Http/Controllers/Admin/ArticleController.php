<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index(){
      return view('admin/article-table');
    }

    public function create(){
      return view('admin/article-create');
    }

    public function store(Request $request){

      $request->validate([
        'judul' =>  'required', 
        'konten'  => 'required'
      ]);


      $path = $request->file('gambar')->store('public/fileartikel');
      $data = [
        'file'  =>  $path
      ];

      $masjid = new Mosque;
      $request->$data;


      Auth::user()->role->dataArtikel()->create($request->except('_token'));
      return redirect(route('admin.article'));

    }
}
