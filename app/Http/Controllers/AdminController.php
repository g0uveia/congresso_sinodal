<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\Inscrito;
use App\Pagamento;
use App\TipoPagamento;
use App\Presbiterio;

class AdminController extends Controller
{

    public function login() {
        $this->validate(request(), [
            'username' => 'bail|required|exists:admins',
            'password' => 'required'
        ]);

        if (Auth::attempt(request(['username', 'password']))) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->withErrors([
                'password_error' => "This credentials doesn't match"
            ]);
        }
    }

    public function dashboard() {
        return view('admin.dashboard')->with([
            'inscritos' => Inscrito::ultimos(),
            'num_inscritos' => Inscrito::numInscritos(),
            'inscritos_por_mes' => Inscrito::porMes(),
            'num_pagamentos' => Pagamento::numPagamentos(),
            'num_dividas_quitadas' => Pagamento::numDividasQuitadas(),
            'saldo' => Pagamento::saldo(),
            'tipos_pagamento' => TipoPagamento::all(),
            'presbiterios' => Presbiterio::all(),
        ]);
    }

    public function logout() {
        auth()->logout();
        return redirect()->home();
    }
}
