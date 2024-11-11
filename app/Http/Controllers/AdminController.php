<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sakit;

class AdminController extends Controller
{
    function index()
    {
        return view('admin');

    }
    function uks_siswa()
    {
        $sakit = Sakit::all();
        return view('uks_siswa.ukssiswa', compact('sakit'));

    } function uks_siswi()
    {
        return view('uks_siswi.ukssiswi');
    }
    function poskes()
    {
        return view('poskes');
    }
}
