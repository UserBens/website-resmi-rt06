<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postingan = Postingan::orderBy('judul', 'asc')->get();
        return view('admin.postingan.index',[
            'postingan' => $postingan,       
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.postingan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'image' => 'image|file|max:20024',
            'body' => 'required'
        ]);
    
        if ($request->file('image')) {

            $filePath = $request->file('image')->store('public/postingan');
    
            $filePath = str_replace('public/', '', $filePath);
    
            $validatedData['image'] = $filePath;
        }
    
        Postingan::create($validatedData);
    
        return redirect('/postingan')->with('success', 'Postingan baru telah ditambahkan!');
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
        $postingan = Postingan::where('id', $id)->first();
        return view('admin.postingan.edit', [
            'postingan' => $postingan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'image' => 'image|file|max:20024',
            'body' => 'required'
        ]);
    
        // Temukan postingan berdasarkan ID
        $postingan = Postingan::findOrFail($id);

        if ($request->file('image')) {

            Storage::delete($postingan->image);

            $filePath = $request->file('image')->store('public/postingan');
    
            $filePath = str_replace('public/', '', $filePath);
    
            $validatedData['image'] = $filePath;
        }
        
        $postingan->update($validatedData);

        return redirect('/postingan')->with('success', 'Postingan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Postingan::where('id', $id)->delete();
        return redirect('/postingan')->with('success', 'Postingan berhasil dihapus!');
    }
}
