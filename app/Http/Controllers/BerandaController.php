<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use App\Models\Produk;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index() {
        return view('beranda',[
            'produk' => Produk::orderBy('id', 'desc')->take(3)->get(),
            'postingan' => Postingan::orderBy('id', 'desc')->take(3)->get(),
            'kontenpost' => Postingan::orderBy('id', 'desc')->take(1)->get(),
            'kontenprod' => Produk::orderBy('id', 'desc')->take(1)->get(),
        ]);
    }

    public function postingan(Request $request) {
        $keyword = $request->input('search');
        
        $postingan = Postingan::when($keyword, function ($query, $keyword) {
            return $query->where('judul', 'like', '%' . $keyword . '%')
                         ->orWhere('body', 'like', '%' . $keyword . '%');
        })->orderBy('judul', 'desc')->paginate(3)->withQueryString();
    
        return view('postingan', [
            'produk' => Produk::orderBy('id', 'desc')->take(3)->get(),
            'postsidebar' => Postingan::orderBy('id', 'asc')->take(3)->get(),
            'postingan' => $postingan,
            'keyword' => $keyword, 
        ]);
    }

    public function produk(Request $request) {
        $keyword = $request->input('search');
        
        $prod = Produk::when($keyword, function ($query, $keyword) {
            return $query->where('nama_produk', 'like', '%' . $keyword . '%')
                         ->orWhere('deskripsi_produk', 'like', '%' . $keyword . '%');
        })->orderBy('nama_produk', 'desc')->paginate(3)->withQueryString();
    
        return view('produk', [
            'produk' => Produk::orderBy('id', 'desc')->take(3)->get(),
            'postsidebar' => Postingan::orderBy('id', 'asc')->take(3)->get(),
            'prod' => $prod,
            'keyword' => $keyword, 
        ]);
    }
    
}
