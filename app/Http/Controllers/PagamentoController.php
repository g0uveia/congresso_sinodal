<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Pagamento;
use App\TipoPagamento;
use App\Inscrito;

class PagamentoController extends Controller
{
    public function index() {
        return view('pagamento.index')->with([
            'pagamentos' => Pagamento::paginate(10),
            'saldo_por_inscrito' => Pagamento::porInscrito(),
            'num_pagamentos' => Pagamento::count(),
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'inscrito_id' => 'required|integer',
            'tipo_pagamento_id' => 'required|integer',
            'valor' => 'required',
            'data_pagamento' => 'required|date|before_or_equal:'. date("Y-m-d"),
            'comprovante' => 'required|image',
            'comentarios' => 'string|nullable'
        ]);

        $pagamento = new Pagamento();

        $pagamento->inscrito_id = $request->inscrito_id;
        $pagamento->tipo_pagamento_id = $request->tipo_pagamento_id;
        $pagamento->valor = $request->valor;
        $pagamento->data_pagamento = $request->data_pagamento;
        $pagamento->comprovante = $request->file('comprovante')->store('comprovantes');
        $pagamento->comentarios = $request->comentarios;

        $pagamento->save();
        return redirect()->back();

    }
    public function delete(Pagamento $pagamento, Request $request) {
        if ($request->pagamento_id == $pagamento->id) {
            $pagamento->delete();
            return redirect()->back();
        }

    }
}
