<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uksController extends Controller
{
    function ukssiswa(){
        return view('uks_siswa.ukssiswa');
    }

    function ukssiswi(){
        return view('uks_siswi.ukssiswi');
    }

    function tmbhsiswa(){
        return view('uks_siswa.formsiswa');
    }

    function tmbhsiswi(){
        return view('uks_siswi.formsiswi');
    }
}
