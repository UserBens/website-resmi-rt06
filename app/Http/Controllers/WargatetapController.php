<?php

namespace App\Http\Controllers;

use App\Models\Wargatetap;
use Illuminate\Http\Request;

class WargatetapController extends Controller
{
    public function index()
    {
        $wargatetap = Wargatetap::latest()->first(); // or any other query to get the specific data

        return view('admin.kependudukan.wargatetap', [
            'wargatetap' => $wargatetap,
        ]);
    }

    public function updatewargatetap(Request $request)
    {
        $request->validate([
            'jml_penduduk' => 'required',
            'jml_laki' => 'required',
            'jml_perempuan' => 'required',
            'jml_kk' => 'required',
           
        ]);

        $data = [
            'jml_penduduk' => $request->jml_penduduk,
            'jml_laki' => $request->jml_laki,
            'jml_perempuan' => $request->jml_perempuan,
            'jml_kk' => $request->jml_kk,
           
        ];
        // Update atau buat data penduduk
        Wargatetap::updateOrCreate($data, $data);

        return redirect('/warga-tetap')->with('success', 'Data Warga Tetap telah diperbarui!');
    }
}
