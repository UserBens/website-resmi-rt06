<?php

namespace App\Http\Controllers;

use App\Models\Wargakos;
use Illuminate\Http\Request;

class WargakosController extends Controller
{
    public function index()
    {
        $wargakos = Wargakos::latest()->first(); // or any other query to get the specific data

        return view('admin.kependudukan.wargakos', [
            'wargakos' => $wargakos,
        ]);
    }

    public function updatewargakos(Request $request)
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
        Wargakos::updateOrCreate($data, $data);

        return redirect('/warga-kos')->with('success', 'Data Warga Kos telah diperbarui!');
    }
}
