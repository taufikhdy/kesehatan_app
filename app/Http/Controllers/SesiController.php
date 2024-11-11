<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {

        return view('welcome');

    }
    function index2()
    {

        return view('login');

    }

    function landing()
    {

        return view('homepage.index');

    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'email wajib diisi',
            'password.required'=>'password wajib diisi'
        ]);

         $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
         ];

         if(Auth::attempt($infologin)){
           if(Auth::user()->role == 'uks_siswa'){
            return redirect('admin/uks_siswa');
         } elseif(Auth::user()->role == 'uks_siswi'){
            return redirect('admin/uks_siswi');
         }elseif(Auth::user()->role == 'poskes'){
            return redirect('admin/poskes');
         }
         }else{
            return redirect('/login')->withErrors('username dan password yang dimasukan tidak sesuai')->withInput();
         }

    }


    function logout()
    {
     Auth::logout();
      return redirect('');
    }
}
