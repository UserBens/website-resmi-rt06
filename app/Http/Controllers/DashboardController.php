<?php

namespace App\Http\Controllers;

use App\Models\Notulen;
use App\Models\Pengurusrt;
use App\Models\Postingan;
use App\Models\Produk;
use App\Models\Proker;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $total_postingan = Postingan::all()->count();
        $total_produk = Produk::all()->count();
        $total_notulen = Notulen::all()->count();
        $total_pengurus = Pengurusrt::all()->count();
        $total_proker = Proker::all()->count();

        return view('admin.dashboard', [
            'total_postingan' => $total_postingan,
            'total_produk' => $total_produk,
            'total_notulen' => $total_notulen,
            'total_pengurus' => $total_pengurus,
            'total_proker' => $total_proker,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
