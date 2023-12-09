<?php

namespace App\Http\Controllers;

use App\Models\Datapenduduk;
use Illuminate\Http\Request;

class DatapendudukController extends Controller
{
    public function index()
    {
        $datapenduduk = Datapenduduk::latest()->first(); // or any other query to get the specific data

        return view('admin.kependudukan.datapenduduk', [
            'datapenduduk' => $datapenduduk,
        ]);
    }

    public function updatedatapenduduk(Request $request)
    {
        $request->validate([
            'jml_penduduk' => 'required',
            'jml_laki' => 'required',
            'jml_perempuan' => 'required',
            'jml_kk' => 'required',
            'jml_kk_kontrak' => 'required',
            'jml_kk_kos' => 'required'
        ]);

        $data = [
            'jml_penduduk' => $request->jml_penduduk,
            'jml_laki' => $request->jml_laki,
            'jml_perempuan' => $request->jml_perempuan,
            'jml_kk' => $request->jml_kk,
            'jml_kk_kontrak' => $request->jml_kk_kontrak,
            'jml_kk_kos' => $request->jml_kk_kos
        ];
        // Update atau buat data penduduk
        Datapenduduk::updateOrCreate($data, $data);

        return redirect('/data-penduduk')->with('success', 'Data penduduk telah diperbarui!');
    }
}
