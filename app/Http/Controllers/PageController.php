<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use App\Models\Siswi;
use App\Models\Tb_Konfirmasi;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function fulldata(){
        $sakit = Siswa::all();
        $siswisakit = Siswi::all();

        $lk = Siswa::pluck('kelas')->toArray();
        $pr = Siswi::pluck('kelas')->toArray();

        $siswaberobat = Tb_Konfirmasi::where('kelas', $lk)->get();
        $siswiberobat = Tb_Konfirmasi::where('kelas', $pr)->get();
        return view('homepage.data', compact('sakit', 'siswisakit', 'siswaberobat', 'siswiberobat'));
    }

    public function fullrekammedis(){
        $lk = Siswa::pluck('kelas')->toArray();
        $pr = Siswi::pluck('kelas')->toArray();

        $siswaberobat = Tb_Konfirmasi::where('kelas', $lk)->get();
        $siswiberobat = Tb_Konfirmasi::where('kelas', $pr)->get();
        return view('homepage.rekammedis',compact( 'siswaberobat', 'siswiberobat'));
    }

    public function showsiswa($id){
        $siswaberobat = Tb_Konfirmasi::find($id);
        if (!$siswaberobat) {
            return view('homepage.rekammedis')->with('error', 'Data siswa tidak ditemukan.');
        }else{
            return view('homepage.showsiswa', compact('siswaberobat'))->with('data Ditemukan');
        }

    }

    public function showsiswi($id){
        $siswiberobat = Tb_Konfirmasi::find($id);
        if (!$siswiberobat) {
            return view('homepage.rekammedis')->with('error', 'Data siswa tidak ditemukan.');
        }else{
            return view('homepage.showsiswi', compact('siswiberobat'))->with('data Ditemukan');
        }

    }

    public function tentang(){
        return view('homepage.tentang');
    }
}
