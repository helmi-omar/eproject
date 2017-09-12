<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = 'Selamat Datang';
        $field_nama = '<input type="text" name="nama_user">';

        return view('welcome', compact('message', 'field_nama') );
    }


    public function dashboard()
    {
        return view('dashboard');
    }
}
