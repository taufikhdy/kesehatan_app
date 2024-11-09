<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('welcome');

    }
    function uks_siswa()
    {
        return view('uks_siswa');

    } function uks_siswi()
    {
        return view('uks_siswi');
    }
    function poskes()
    {
        return view('poskes');
    }
}
