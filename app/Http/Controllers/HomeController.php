<?php

namespace App\Http\Controllers;

use App\Ikan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post = Ikan::all();
        return view('home', compact('post'));
    }
}
