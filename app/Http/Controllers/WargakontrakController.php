<?php

namespace App\Http\Controllers;

use App\Models\Wargakontrak;
use Illuminate\Http\Request;

class WargakontrakController extends Controller
{
    public function index()
    {
        $wargakontrak = Wargakontrak::latest()->first(); // or any other query to get the specific data

        return view('admin.kependudukan.wargakontrak', [
            'wargakontrak' => $wargakontrak,
        ]);
    }

    public function updatewargakontrak(Request $request)
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
        Wargakontrak::updateOrCreate($data, $data);

        return redirect('/warga-kontrak')->with('success', 'Data Warga Kontrak telah diperbarui!');
    }
}
