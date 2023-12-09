<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wargatidaktetap;

class WargatidaktetapController extends Controller
{
    public function index()
    {
        $wargatidaktetap = Wargatidaktetap::latest()->first(); // or any other query to get the specific data

        return view('admin.kependudukan.wargatidaktetap', [
            'wargatidaktetap' => $wargatidaktetap,
        ]);
    }

    public function updatewargatidaktetap(Request $request)
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
        Wargatidaktetap::updateOrCreate($data, $data);

        return redirect('/warga-tidak-tetap')->with('success', 'Data Warga Tidak Tetap telah diperbarui!');
    }
}
