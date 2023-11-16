<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::orderBy('nama_produk', 'asc')->get();
        return view('admin.produk.index',[
            'produk' => $produk,
            
        ]);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'nama_produk' => 'required|max:255',
            'image' => 'image|file|max:20024',
            'deskripsi_produk' => 'required'
        ]);

        if ($request->file('image')) {

            $filePath = $request->file('image')->store('public/postingan');
    
            $filePath = str_replace('public/', '', $filePath);
    
            $validatedData['image'] = $filePath;
        }
    
        Produk::create($validatedData);
    
        return redirect('/produk')->with('success', 'Produk baru telah ditambahkan!');
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
        $produk = Produk::where('id', $id)->first();
        return view('admin.produk.edit', [
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'image' => 'image|file|max:20024',
            'deskripsi_produk' => 'required'
        ]);
    
        // Temukan postingan berdasarkan ID
        $produk = Produk::findOrFail($id);

        if ($request->file('image')) {

            Storage::delete($produk->image);

            $filePath = $request->file('image')->store('public/postingan');
    
            $filePath = str_replace('public/', '', $filePath);
    
            $validatedData['image'] = $filePath;
        }
        
        $produk->update($validatedData);

        return redirect('/produk')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::where('id', $id)->delete();
        return redirect('/produk')->with('success', 'Produk berhasil dihapus!');

    }
}
