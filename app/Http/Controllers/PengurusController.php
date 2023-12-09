<?php

namespace App\Http\Controllers;

use App\Models\Pengurusrt;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('search');

        $pengurus = Pengurusrt::when($keyword, function ($query, $keyword) {
            return $query->where('nama_pengurus', 'like', '%' . $keyword . '%')
                ->orWhere('jabatan', 'like', '%' . $keyword . '%')
                ->orWhere('kategori_pengurus', 'like', '%' . $keyword . '%');
        })->latest()->paginate(6);
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

        return redirect('/pengurus')->with('success', 'Data Pengurus Baru Telah Ditambahkan!');
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
        $pengurus = Pengurusrt::where('id', $id)->first();
        return view('admin.pengurus.edit', [
            'pengurus' => $pengurus,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_pengurus' => 'required|max:255',
            'image' => 'image|file|max:20024',
            'jabatan' => 'required',
            'kategori_pengurus' => 'required',
        ]);

        $pengurus = Pengurusrt::findOrFail($id);

        if ($request->file('image')) {

            $filePath = $request->file('image')->store('public/postingan');

            $filePath = str_replace('public/', '', $filePath);

            $validatedData['image'] = $filePath;
        }

        $pengurus->update($validatedData);

        return redirect('/pengurus')->with('success', 'Update Data Pengurus Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pengurusrt::where('id', $id)->delete();
        return redirect('/pengurus')->with('success', 'Data Pengurus Berhasil Dihapus!');
    }
}
