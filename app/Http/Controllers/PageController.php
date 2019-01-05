<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presbiterio;
use App\Igreja;

class PageController extends Controller
{
    public function index () {
        return view('index');
    }

    public function inscricao () {
        return view('inscricao')->with(['presbiterios' => Presbiterio::All(), 'igrejas' => Igreja::All()]);
    }

    public function login ()
    {
        return view('login');
    }
}
