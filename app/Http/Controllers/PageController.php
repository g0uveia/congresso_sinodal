<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presbiterio;
use App\Igreja;

class PageController extends Controller
{

    public function admin () {
        return view('admin.login');
    }

    public function sucesso () {
        return view('sucesso');
    }
}
