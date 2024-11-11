<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswi;
use App\Models\Kelas;

use illuminate\Support\Facades\Auth;

class SiswiController extends Controller
{


    public function index(){
        $sakit = Siswi::all();
        return view('uks_siswi.ukssiswi', compact('sakit'));
    }

    public function tambah(){
        $user = Auth::user();
        $email = $user->email;

        if($email == 'ukssiswa@gmail.com'){
            $ket = 'kelas_siswa';
            $data = Kelas::where('keterangan', $ket)->get();
            return view('uks_siswi.formsiswi', compact('data'));
        }elseif($email == 'ukssiswi@gmail.com'){
            $ket = 'kelas_siswi';
            $data = Kelas::where('keterangan', $ket)->get();
            return view('uks_siswi.formsiswi', compact('data'));
        }
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

        Siswi::create($request->all());

        return redirect()->route('ukssiswi')->with('success', 'Patient added successfully.');

    }




    public function hapus($id)
    {
        $siswa = Siswi::findOrFail($id);
        $siswa->delete();

        return redirect()->route('ukssiswi')->with('success', 'Patient deleted successfully.');
    }


}
