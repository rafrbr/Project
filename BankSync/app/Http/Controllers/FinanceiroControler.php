<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\financeiro;

class FinanceiroControler extends Controller
{
    function addData(Request $req)
    {
    $Financeiro = new Financeiro();
    $Financeiro->data = $req->data;
    $Financeiro->origem = $req->origem;
    $Financeiro->tipo = $req->tipo;
    $Financeiro->valor=$req->valor;
    $Financeiro->grupo = $req->grupo;
    $Financeiro->subgrupo = $req->subgrupo;
    $Financeiro->save();
    return redirect('/financeiro')->with('status',"Registrado criado com sucesso!");
    }


    function show()
    {
        $data = financeiro::all();
        return view('/financeiro',['financeiro'=>$data]);
    }


    public function remove($id)
    {
        $Financeiro = Financeiro::find($id);
        $Financeiro->delete();
        return redirect('/financeiro')->with('status',"Registro removido com sucesso!");
    }

}
