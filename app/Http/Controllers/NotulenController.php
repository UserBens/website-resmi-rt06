<?php

namespace App\Http\Controllers;

use App\Models\Notulen;
use Illuminate\Http\Request;

class NotulenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $notulen = Notulen::orderBy('judul', 'asc')->paginate(6);
        $keyword = $request->input('search');
        $notulen = Notulen::when($keyword, function ($query, $keyword) {
            return $query->where('judul', 'like', '%' . $keyword . '%')
                         ->orWhere('body', 'like', '%' . $keyword . '%');
        })->orderBy('judul', 'desc')->paginate(6);

        return view('admin.notulen.index', [
            'notulen' => $notulen,
            'keyword' => $keyword,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notulen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'tgl_mulai' => 'required',
            'body' => 'required'
        ]);

        Notulen::create($validatedData);

        return redirect('/notulen')->with('success', 'Notulen baru telah ditambahkan!');
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
        $notulen = Notulen::where('id', $id)->first();
        return view('admin.notulen.edit', [
            'notulen' => $notulen
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'tgl_mulai' => 'required',
            'body' => 'required'
        ]);

        $notulen = Notulen::findOrFail($id);

        $notulen->update($validatedData);

        return redirect('/notulen')->with('success', 'Notulen baru telah diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Notulen::where('id', $id)->delete();
        return redirect('/notulen')->with('success', 'Notulen berhasil dihapus!');
    }

}
