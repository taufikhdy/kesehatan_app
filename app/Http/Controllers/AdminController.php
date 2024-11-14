<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Siswi;
use Carbon\Carbon;

class AdminController extends Controller
{

    function index()
    {
        return view('admin');

    }
    function uks_siswa()
    {
        $sakit = Siswa::all();
        return view('uks_siswa.ukssiswa', compact('sakit'));

    } function uks_siswi()
    {
        $sakit = Siswi::all();
        return view('uks_siswi.ukssiswi', compact('sakit'));
    }




    // UNTUK POSKES
    function poskes()
    {
        $totalm = Siswa::all()->count();
        $totalw = Siswi::all()->count();

        $notsa = Siswa::where('tanggal', Carbon::today()->toDateString())->get();
        $notsi = Siswi::where('tanggal', Carbon::today()->toDateString())->get();

        return view('poskes.page.home', compact('totalm', 'totalw', 'notsa', 'notsi'));
    }
}
