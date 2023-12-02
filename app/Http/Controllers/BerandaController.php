<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use App\Models\Produk;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda', [
            'produk' => Produk::latest()->take(3)->get(),
            'postingan' => Postingan::latest()->take(3)->get(),
            'kontenpost' => Postingan::latest()->take(1)->get(),
            'kontenprod' => Produk::latest()->take(1)->get(),
        ]);
    }

    public function postingan(Request $request)
    {
        $keyword = $request->input('search');

        $postingan = Postingan::when($keyword, function ($query, $keyword) {
            return $query->where('judul', 'like', '%' . $keyword . '%')
                ->orWhere('body', 'like', '%' . $keyword . '%');
        })->latest()->paginate(3)->withQueryString();

        return view('postingan', [
            'produk' => Produk::latest()->take(3)->get(),
            // 'postsidebar' => Postingan::orderBy('id', 'asc')->take(3)->get(),
            'postingan' => $postingan,
            'keyword' => $keyword,
        ]);
    }

    public function produk(Request $request)
    {
        $keyword = $request->input('search');

        $prod = Produk::when($keyword, function ($query, $keyword) {
            return $query->where('nama_produk', 'like', '%' . $keyword . '%')
                ->orWhere('deskripsi_produk', 'like', '%' . $keyword . '%');
        })->latest()->paginate(3)->withQueryString();

        return view('produk', [
            'produk' => Produk::orderBy('id', 'desc')->take(3)->get(),
            'postsidebar' => Postingan::latest()->take(3)->get(),
            'prod' => $prod,
            'keyword' => $keyword,
        ]);
    }

    public function tentangkami(Request $request)
    {
        $keyword = $request->input('search');

        $prod = Produk::when($keyword, function ($query, $keyword) {
            return $query->where('nama_produk', 'like', '%' . $keyword . '%')
                ->orWhere('deskripsi_produk', 'like', '%' . $keyword . '%');
        })->orderBy('nama_produk', 'desc')->paginate(3)->withQueryString();

        return view('tentangkami', [
            'produk' => Produk::orderBy('id', 'desc')->take(3)->get(),
            'postsidebar' => Postingan::orderBy('id', 'asc')->take(3)->get(),
            'postingan' => Postingan::orderBy('id', 'desc')->take(3)->get(),
            'prod' => $prod,
            'keyword' => $keyword,
        ]);
    }

    public function detailpost($id)
    {
        $post = Postingan::find($id);
        return view('detailpost', [
            'postingan' => Postingan::orderBy('id', 'asc')->take(3)->get(),
            'produk' => Produk::orderBy('id', 'asc')->take(3)->get(),
            'post' => $post,
        ]);
    }

    public function detailprod($id)
    {
        $prod = Produk::find($id);
        return view('detailprod', [
            'postingan' => Postingan::orderBy('id', 'asc')->take(3)->get(),
            'produk' => Produk::orderBy('id', 'asc')->take(3)->get(),
            'prod' => $prod,
        ]);
    }

    public function kontak()
    {
        return view('kontak');
    }
}
