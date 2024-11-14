<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use App\Models\Siswi;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function fulldata(){
        $sakit = Siswa::all();
        $siswisakit = Siswi::all();
        return view('homepage.data', compact('sakit', 'siswisakit'));
    }

    public function fullrekammedis(){
        return view('homepage.rekammedis');
    }

    public function showsiswa($id){
        $siswa = Siswa::find($id);  //ganti model berdasarkan tabel rekam medis
        if (!$siswa) {
            return view('homepage.rekammedis')->with('error', 'Data siswa tidak ditemukan.');
        }else{
            return view('homepage.showsiswa', compact('siswa'))->with('data Ditemukan');
        }

    }

    public function showsiswi($id){
        $siswa = Siswa::findOrFail($id); //ganti model berdasarkan tabel rekam medis
        if (!$siswa) {
            return view('homepage.rekammedis')->with('error', 'Data siswa tidak ditemukan.');
        }else{
            return view('homepage.showsiswi', compact('siswi'))->with('data Ditemukan');
        }

    }

    public function tentang(){
        return view('homepage.tentang');
    }
}
