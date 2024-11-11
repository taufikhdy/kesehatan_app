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
}
