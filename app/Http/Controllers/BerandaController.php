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
        ]);
    }
}
