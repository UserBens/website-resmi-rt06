<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Proker;
use App\Models\Wargakos;
use App\Models\Postingan;
use App\Models\Pengurusrt;
use App\Models\Wargatetap;
use App\Models\Datapenduduk;
use App\Models\Wargakontrak;
use Illuminate\Http\Request;
use App\Models\Wargatidaktetap;

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

    public function proker(Request $request)
    {
        $keyword = $request->input('search');

        $prok = Proker::when($keyword, function ($query, $keyword) {
            return $query->where('nama_proker', 'like', '%' . $keyword . '%');
        })->latest()->paginate(3)->withQueryString();

        return view('proker', [
            'produk' => Produk::latest()->take(3)->get(),
            'postsidebar' => Postingan::latest()->take(3)->get(),
            'prok' => $prok,
            'keyword' => $keyword,
        ]);
    }

    public function tentangkami(Request $request)
    {
        $datapenduduk = Datapenduduk::latest()->first(); // or any other query to get the specific data
        $wargatetap = Wargatetap::latest()->first(); // or any other query to get the specific data
        $wargatidaktetap = Wargatidaktetap::latest()->first(); // or any other query to get the specific data
        $wargakos = Wargakos::latest()->first(); // or any other query to get the specific data
        $wargakontrak = Wargakontrak::latest()->first(); // or any other query to get the specific data

        $pengurusrt = Pengurusrt::where('kategori_pengurus', 'Pengurus RT')->get();
        $penguruspkk = Pengurusrt::where('kategori_pengurus', 'Pengurus PKK')->get();
        $pengurusmasjid = Pengurusrt::where('kategori_pengurus', 'Pengurus Masjid')->get();
        // $penguruspkk = Pengurusrt::where('kategori_pengurus', 'Pengurus Kartar')->get();

        return view('tentangkami', [
            'pengurusrt' => $pengurusrt,
            'penguruspkk' => $penguruspkk,
            'pengurusmasjid' => $pengurusmasjid,
            'datapenduduk' => $datapenduduk,
            'wargatetap' => $wargatetap,
            'wargatidaktetap' => $wargatidaktetap,
            'wargakos' => $wargakos,
            'wargakontrak' => $wargakontrak,

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

    public function detailprok($id)
    {
        $prok = Proker::find($id);
        return view('detailprok', [
            'postingan' => Postingan::orderBy('id', 'asc')->take(3)->get(),
            'produk' => Produk::orderBy('id', 'asc')->take(3)->get(),
            'prok' => $prok,
        ]);
    }

    public function kontak()
    {
        return view('kontak');
    }
}
