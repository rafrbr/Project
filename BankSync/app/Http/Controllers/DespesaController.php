<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DespesaController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $despesas = Despesa::where('user_id', $user_id)->get();
        return view('despesas.index', compact('despesas'));
    }

    public function create()
    {
        return view('despesas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'data' => 'required|date',
            'grupo' => 'required|string',
            'subgrupo' => 'required|string',
            'valor' => 'required|numeric',
            'forma_pagamento' => 'nullable|string', // Campo 'forma_pagamento' é opcional
        ]);

        $data['user_id'] = Auth::id();
        Despesa::create($data);

        return redirect()->route('despesas.index')->with('success', 'Despesa criada com sucesso!');
    }

    public function edit($id)
    {
        $despesa = Despesa::findOrFail($id);
        return view('despesas.edit', compact('despesa'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'data' => 'required|date',
            'grupo' => 'required|string',
            'subgrupo' => 'required|string',
            'valor' => 'required|numeric',
            'forma_pagamento' => 'nullable|string', // Campo 'forma_pagamento' é opcional
        ]);

        $despesa = Despesa::findOrFail($id);
        $despesa->update($data);

        return redirect()->route('despesas.index')->with('success', 'Despesa atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $despesa = Despesa::findOrFail($id);
        $despesa->delete();

        return redirect()->route('despesas.index')->with('success', 'Despesa excluída com sucesso!');
    }
}
