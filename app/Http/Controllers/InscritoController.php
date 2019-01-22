<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Inscrito;
use App\Presbiterio;
use App\TipoPagamento;
use App\Mail\InformacoesPagamento;

class InscritoController extends Controller
{

    public function index () {
        return view('inscrito.index')->with([
            'inscritos' => Inscrito::paginate(10),
            'num_inscritos' => Inscrito::numInscritos()
        ]);
    }

    public function show (Inscrito $inscrito) {
        return view('inscrito.show')->with([
            'inscrito' => $inscrito,
            'tipo_pagamentos' => TipoPagamento::all(),
            'num_pagamentos' => count($inscrito->pagamentos),
            'pagamentos' => $inscrito->pagamentos->sortByDesc('created_at')
        ]);
    }

    public function create() {
        return view('inscrito.create')->with([
            'presbiterios' => Presbiterio::All(),
            'igrejas' => Presbiterio::first() ? Presbiterio::first()->igrejas : []
        ]);
    }

    public function store (Request $request) {
        $validator = Validator::make($request->all(),  Inscrito::rules(), Inscrito::messages());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();

        } else {
            $inscrito = new Inscrito();

            $inscrito->nome = $request->nome;
            $inscrito->nascimento = $request->nascimento;
            $inscrito->sexo = $request->sexo;
            $inscrito->email = $request->email;
            $inscrito->inscricao = $request->inscricao;
            $inscrito->igreja_id = $request->igreja;

            $inscrito->save();

            Mail::to($inscrito)->send(new InformacoesPagamento($inscrito));
        }


        return redirect()->back()->with(['success' => true]);

    }

    public function delete(Inscrito $inscrito, Request $request) {
        if ($request->inscrito_id == $inscrito->id) {
            $inscrito->delete();
        }

        return redirect()->route('inscrito.index');
    }


    public function search (Request $request) {
        if ($request->ajax()) {
            $inscritos = Inscrito::where('nome', 'like', '%'.$request->get('query').'%')
                ->orWhere('nome', 'like', '%'.$request->get('query').'%')
                    ->paginate(10);

            $response = [
                'table_tbody' => '',
                'pagination_links' => '',
            ];

            if (count($inscritos) > 0) {
                foreach ($inscritos as $inscrito) {
                    $response['table_tbody'] = $response['table_tbody'] .
                        '<tr>
                            <th scope="col">' . $inscrito->id . '</th>
                            <td><a href="' . route('inscrito.show', $inscrito->id) . '">' . $inscrito->nome . '</a></td>
                            <td>' . $inscrito->email . '</td>
                            <td>' . $inscrito->igreja->presbiterio->sigla . '</td>
                            <td>' . $inscrito->igreja->nome . '</td>
                            <td>' . $inscrito->created_at->diffForHumans() . '</td>
                        </tr>';
                }

                $response['pagination_links'] = html_entity_decode($inscritos->links());


            } else  {
                $response['table_tbody'] = view('_includes.inscrito.notfound');
            }

            return json_encode($response);
        }
    }
}
