<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Siswi;

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
    function poskes()
    {
        return view('poskes');
    }
}
