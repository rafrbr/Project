@extends('layouts.principal')
<link rel="stylesheet" href="{{ asset('css/receitas.css') }}">

@section('conteudo')
<div class="container">
    <h1 class="my-4">Bem-vindo, {{ Auth::user()->name }}!</h1>
    <h2 class="mb-4">Aqui estão suas receitas:</h2>

    <!-- Campos de filtro -->
    <div class="form-row mb-3">
        <div class="col">
            <select id="filtroDia" class="form-control">
                <option value="">Filtrar por Dia</option>
                @for ($dia = 1; $dia <= 31; $dia++)
                    <option value="{{ $dia < 10 ? '0' . $dia : $dia }}">{{ $dia }}</option>
                @endfor
            </select>
        </div>
        <div class="col">
            <select id="filtroMes" class="form-control">
                <option value="">Filtrar por Mês</option>
                @for ($mes = 1; $mes <= 12; $mes++)
                    <option value="{{ $mes < 10 ? '0' . $mes : $mes }}">{{ $mes }}</option>
                @endfor
            </select>
        </div>
        <div class="col">
            <select id="filtroAno" class="form-control">
                <option value="">Filtrar por Ano</option>
                @for ($ano = date('Y'); $ano >= 2000; $ano--)
                    <option value="{{ $ano }}">{{ $ano }}</option>
                @endfor
            </select>
        </div>
    </div>

    <!-- Botão para abrir o modal de adicionar nova receita -->
    <button id="openModalReceitaButton" class="btn btn-primary my-2">Adicionar Receita</button>

    <!-- Tabela de receitas -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Grupo</th>
                <th>Subgrupo</th>
                <th>Valor</th>
                <th>Forma de Pagamento</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($receitas as $receita)
                <tr>
                    <td>{{ $receita->grupo }}</td>
                    <td>{{ $receita->subgrupo }}</td>
                    <td>R$ {{ number_format($receita->valor, 2) }}</td>
                    <td>{{ $receita->forma_pagamento ?? 'N/A' }}</td>
                    <td>{{ date('d/m/Y', strtotime($receita->data)) }}</td>
                    <td>
                        <a href="{{ route('receitas.edit', $receita) }}" class="btn btn-sm btn-info">Editar</a>
                        <form action="{{ route('receitas.destroy', $receita) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal para adicionar nova receita -->
<div id="addReceitaModal" class="modal" style="display: none;">
    <div class="modal-content" style="max-width: 400px; margin: 0 auto;">
        <span class="close" id="closeModalReceitaButton" style="margin: 0 auto;">&times;</span>
        <h2 class="my-4">Adicionar Nova Receita</h2>
        <form action="{{ route('receitas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="data">Data:</label>
                <input type="date" name="data" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="grupo">Grupo:</label>
                <input type="text" name="grupo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="subgrupo">Subgrupo:</label>
                <input type="text" name="subgrupo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" step="0.01" name="valor" class="form-control" required>
            </div>
            <!-- Opções de Forma de Pagamento como botões de rádio -->
            <div class="form-group">
                <label>Forma de Pagamento:</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="forma_pagamento" id="credito" value="Crédito">
                        <label class="form-check-label" for="credito">Crédito</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="forma_pagamento" id="debito" value="Débito">
                        <label class="form-check-label" for="debito">Débito</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="forma_pagamento" id="dinheiro" value="Dinheiro">
                        <label class="form-check-label" for="dinheiro">Dinheiro</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="forma_pagamento" id="pix" value="PIX">
                        <label class="form-check-label" for="pix">PIX</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="forma_pagamento" id="transferencia" value="Transferência Bancária">
                        <label class="form-check-label" for="transferencia">Transferência Bancária</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Adicionar</button>
        </form>
    </div>
</div>

<script>
    // Função para abrir o modal
    document.getElementById('openModalReceitaButton').addEventListener('click', function() {
        var modal = document.getElementById('addReceitaModal');
        modal.style.display = 'block';
    });

    // Função para fechar o modal
    document.getElementById('closeModalReceitaButton').addEventListener('click', function() {
        var modal = document.getElementById('addReceitaModal');
        modal.style.display = 'none';
    });

    // Filtro de receitas por dia, mês e ano
document.getElementById('filtroDia').addEventListener('change', filtrarReceitas);
document.getElementById('filtroMes').addEventListener('change', filtrarReceitas);
document.getElementById('filtroAno').addEventListener('change', filtrarReceitas);

function filtrarReceitas() {
    var filtroDia = document.getElementById('filtroDia').value;
    var filtroMes = document.getElementById('filtroMes').value;
    var filtroAno = document.getElementById('filtroAno').value;

    var rows = document.querySelectorAll('tbody tr');

    rows.forEach(function(row) {
        var data = row.querySelector('td:nth-child(5)').textContent;
        var dataParts = data.split('/');
        var dia = dataParts[0];
        var mes = dataParts[1];
        var ano = dataParts[2];

        if (
            (filtroDia === '' || dia === filtroDia) &&
            (filtroMes === '' || mes === filtroMes) &&
            (filtroAno === '' || ano === filtroAno)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

</script>
@endsection
