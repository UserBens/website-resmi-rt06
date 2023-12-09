<?php

namespace App\Http\Controllers;

use App\Models\Proker;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        $proker = Proker::when($keyword, function ($query, $keyword) {
            return $query->where('nama_proker', 'like', '%' . $keyword . '%')
                ->orWhere('deskripsi_proker', 'like', '%' . $keyword . '%');
        })->latest()->paginate(6);
       
        return view('admin.proker.index', [
            'proker' => $proker,
            'keyword' => $keyword,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.proker.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_proker' => 'required|max:255',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
            'deskripsi_proker' => 'required'
        ]);

        Proker::create($validatedData);

        return redirect('/proker')->with('success', 'Proker baru telah ditambahkan!');
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
        $proker = Proker::where('id', $id)->first();
        return view('admin.proker.edit', [
            'proker' => $proker
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_proker' => 'required|max:255',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
            'deskripsi_proker' => 'required'
        ]);

        $proker = Proker::findOrFail($id);

        $proker->update($validatedData);

        return redirect('/proker')->with('success', 'Proker baru telah diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Proker::where('id', $id)->delete();
        return redirect('/proker')->with('success', 'Proker berhasil dihapus!');
    }
}
