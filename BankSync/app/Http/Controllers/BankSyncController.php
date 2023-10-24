<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Receita;
use App\Models\Despesa;
use Illuminate\Support\Facades\Storage;


class BankSyncController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::id();
        $dataInicio = $request->input('data_inicio');
        $dataFim = $request->input('data_fim');

        $receitas = Receita::where('user_id', $user_id);
        $despesas = Despesa::where('user_id', $user_id);

        if ($dataInicio && $dataFim) {
            $receitas->whereBetween('data', [$dataInicio, $dataFim]);
            $despesas->whereBetween('data', [$dataInicio, $dataFim]);
        }

        $totalReceitas = $receitas->sum('valor');
        $totalDespesas = $despesas->sum('valor');
        $saldo = $totalReceitas - $totalDespesas;

        $saldoMesAtual = $this->calcularSaldoMesAtual($user_id, $dataInicio, $dataFim);

        return view('financeiro.index', compact('totalReceitas', 'totalDespesas', 'saldo', 'saldoMesAtual', 'dataInicio', 'dataFim'));
    }

    private function calcularSaldoMesAtual($user_id, $dataInicio, $dataFim)
    {
        $hoje = now();
        $primeiroDiaDoMes = $hoje->firstOfMonth();
        $ultimoDiaDoMes = $hoje->lastOfMonth();

        if ($dataInicio && $dataFim) {
            $dataInicio = Carbon::createFromFormat('Y-m-d', $dataInicio);
            $dataFim = Carbon::createFromFormat('Y-m-d', $dataFim);

            if ($dataInicio->isSameMonth($dataFim)) {
                $primeiroDiaDoMes = $dataInicio->firstOfMonth();
                $ultimoDiaDoMes = $dataFim->lastOfMonth();
            }
        }

        $totalReceitasMesAtual = Receita::where('user_id', $user_id)
            ->whereBetween('data', [$primeiroDiaDoMes, $ultimoDiaDoMes])
            ->sum('valor');

        $totalDespesasMesAtual = Despesa::where('user_id', $user_id)
            ->whereBetween('data', [$primeiroDiaDoMes, $ultimoDiaDoMes])
            ->sum('valor');

        $saldoMesAtual = $totalReceitasMesAtual - $totalDespesasMesAtual;

        return $saldoMesAtual;
    }


    public function configuracao()
    {
        return view('financeiro.configuracao');
    }
}
