<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('beranda');
    }

    public function lelang(){
        return view('buat_lelang');
    }

    public function rLelang(){
        return view('riwayat_lelang');
    }

    public function rBid(){
        return view('riwayat_bid');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
}
