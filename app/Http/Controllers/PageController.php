<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presbiterio;
use App\Igreja;

class PageController extends Controller
{
    public function home () {
        return view('_includes.navbar');
    }

    public function inscricao () {
        return view('inscricao')->with([
            'presbiterios' => Presbiterio::All(),
            'igrejas' => Presbiterio::first() ? Presbiterio::first()->igrejas : []
        ]);
    }

    public function admin () {
        return view('admin.login');
    }

    public function sucesso () {
        return view('sucesso');
    }
}
