<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       
        return view('home');
    }

    public function logic()
    {
        return view('logic');
    }

    public function logic_process(Request $request){
        $angka = $request->input('nomor');
        $split = str_split($angka);
        $len = count($split);

        return view('result', ['split' => $split, 'len' => $len]);
    }

    public function data_siswa(){
        return view('data');
    }

}
