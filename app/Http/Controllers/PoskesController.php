<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\Siswi;
use App\Models\Tb_Konfirmasi;
use Carbon\Carbon;

class PoskesController extends Controller
{
    function data(){
        $siswa = Siswa::all();
        $siswi = Siswi::all();

        $notsa = Siswa::where('tanggal', Carbon::today()->toDateString())->get();
        $notsi = Siswi::where('tanggal', Carbon::today()->toDateString())->get();

        return view('poskes.page.data', compact('siswa', 'siswi', 'notsa', 'notsi'));
    }

    function konfirmasi($kelas, $id){

        $lk = [
            'XI A PPLG',
            'XI B APL',
            'XI IPA 1',
            'XI IPS 1',
        ];

        $pr = [
            'XI C APL'
        ];


        if(in_array($kelas, $lk)){
            $data = Siswa::findOrFail($id);
            return view('poskes.page.konfirmasi', compact('data'));
        }

        elseif(in_array($kelas, $pr)){
            $data = Siswi::findOrFail($id);
            return view('poskes.page.konfirmasi', compact('data'));
        }

    }

    function check(Request $request){

        Tb_Konfirmasi::create($request->all());
        $nama = $request->input('nama');
        $kelas = $request->input('kelas');

        $lk = [
            'XI A PPLG',
            'XI B APL',
            'XI IPA 1',
            'XI IPS 1',
        ];

        $pr = [
            'XI C APL'
        ];

        if(in_array($kelas, $lk)){
            $siswa = Siswa::where('nama', $nama)
                        ->where('kelas', $kelas)
                        ->first();
            $siswa->delete();
        }

        elseif(in_array($kelas, $pr)){
            $siswi = Siswi::where('nama', $nama)
                        ->where('kelas', $kelas)
                        ->first();
            $siswi->delete();
        }

        return redirect()->route('data_sakit');
    }
}