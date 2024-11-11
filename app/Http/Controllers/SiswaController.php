<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;

use Illuminate\Support\Facades\Auth;


class SiswaController extends Controller
{

    public function index(){
        $sakit = Siswa::all();
        return view('uks_siswa.ukssiswa', compact('sakit'));
    }

    public function tambah(){
        $user = Auth::user();
        $email = $user->email;

        if($email == 'ukssiswa@gmail.com'){
            $ket = 'kelas_siswa';
            $data = Kelas::where('keterangan', $ket)->get();
            return view('uks_siswa.formsiswa', compact('data'));
        }elseif($email == 'ukssiswi@gmail.com'){
            $ket = 'kelas_siswi';
            $data = Kelas::where('keterangan', $ket)->get();
            return view('uks_siswa.formsiswa', compact('data'));
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

        Siswa::create($request->all());

        return redirect()->route('ukssiswa')->with('success', 'Patient added successfully.');

    }




    public function hapus($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('ukssiswa')->with('success', 'Patient deleted successfully.');
    }

}
