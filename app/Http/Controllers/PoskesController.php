<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Siswi;
use Carbon\Carbon;

class PoskesController extends Controller
{
    public function data(){
        $siswa = Siswa::all();
        $siswi = Siswi::all();

        $notsa = Siswa::where('tanggal', Carbon::today()->toDateString())->get();
        $notsi = Siswi::where('tanggal', Carbon::today()->toDateString())->get();

        return view('poskes.page.data', compact('siswa', 'siswi', 'notsa', 'notsi'));
    }
}
