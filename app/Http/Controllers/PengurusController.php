<?php

namespace App\Http\Controllers;

use App\Models\Pengurusrt;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengurus = Pengurusrt::all();
        return view('admin.pengurus.index', [
            'pengurus' => $pengurus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pengurus' => 'required|max:255',
            'image' => 'image|file|max:20024',
            'jabatan' => 'required',
            'kategori_pengurus' => 'required',
        ]);
    
        if ($request->file('image')) {

            $filePath = $request->file('image')->store('public/postingan');
    
            $filePath = str_replace('public/', '', $filePath);
    
            $validatedData['image'] = $filePath;
        }
    
        Pengurusrt::create($validatedData);
    
        return redirect('/pengurus')->with('success', 'Pengurus baru telah ditambahkan!');
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
