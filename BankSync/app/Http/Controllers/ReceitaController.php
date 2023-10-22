<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceitaController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $receitas = Receita::where('user_id', $user_id)->get();
        return view('receitas.index', compact('receitas'));
    }

    public function create()
    {

        return view('receitas.create');
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
        Receita::create($data);

        return redirect()->route('receitas.index')->with('success', 'Receita criada com sucesso!');
    }

    public function edit(Receita $receita)
    {
        return view('receitas.edit', compact('receita'));
    }

    public function update(Request $request, Receita $receita)
    {
        $data = $request->validate([
            'data' => 'required|date',
            'grupo' => 'required|string',
            'subgrupo' => 'required|string',
            'valor' => 'required|numeric',
            'forma_pagamento' => 'nullable|string', // Campo 'forma_pagamento' é opcional
        ]);

        $receita->update($data);

        return redirect()->route('receitas.index')->with('success', 'Receita atualizada com sucesso!');
    }

    public function destroy(Receita $receita)
    {
        $receita->delete();

        return redirect()->route('receitas.index')->with('success', 'Receita excluída com sucesso!');
    }
}
