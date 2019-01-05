<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscrito;

class InscritoController extends Controller
{
    public function create (Request $request)
    {
        $inscrito = new Inscrito();

        $inscrito->nome = $request->nome;
        $inscrito->cpf = $request->cpf;
        $inscrito->nascimento = $request->nascimento;
        $inscrito->sexo = $request->sexo;
        $inscrito->email = $request->email;
        $inscrito->inscricao = $request->inscricao;
        $inscrito->igreja_id = $request->igreja;

        $inscrito->save();

        return redirect()->route('index');
    }

    public function login (Request $request)
    {
        $inscrito = Inscrito::where('email', '=', $request->email)->where('cpf', '=', $request->cpf)->get();
        if (count($inscrito->all()) > 0)
        {
            $request->session()->put('email', $request->email);
            $request->session()->put('cpf', $request->cpf);
        }
    }
}
