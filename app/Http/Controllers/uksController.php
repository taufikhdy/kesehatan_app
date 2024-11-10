<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sakit;
use App\Models\Kelas;


class UKSController extends Controller
{

    public function index(){
        $sakit = Sakit::all();
        return view('uks_siswa.ukssiswa', compact('sakit'));
    }

    public function tambah(){
        $data = Kelas::all();
        return view('uks_siswa.formsiswa', compact('data'));
    }

    public function getWaliKelas($nama_kelas){
        $kelas = Kelas::where('kelas', $nama_kelas)->first();
        return response()->json(['wali_kelas' => $kelas->wali_kelas]);
    }





    public function kirim(Request $request){
        $request->validate([
            'nama' => 'required|string|max:100',
            'kelas' => 'required|string|max:50',
            'wali_kelas' => 'required|string|max:100',
            'keluhan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'tanggal' => 'required|date',
            // 'description' => 'nullable|string',
        ]);

        Sakit::create($request->all());

        return redirect()->route('ukssiswa')->with('success', 'Patient added successfully.');

    }




    public function hapus($id)
    {
        $siswa = Sakit::findOrFail($id);
        $siswa->delete();

        return redirect()->route('ukssiswa')->with('success', 'Patient deleted successfully.');
    }

}
