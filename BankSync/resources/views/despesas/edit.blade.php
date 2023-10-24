@extends('layouts.principal')
<link rel="stylesheet" href="{{ asset('css/receitas.css') }}">
@section('conteudo')
<div class="container">
    <h1 class="my-4">Editar Despesas</h1>

    <form action="{{ route('despesas.update', $despesa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="data">Data:</label>
            <input type="date" name="data" class="form-control" value="{{ $despesa->data }}" required>
        </div>
        <div class="form-group">
            <label for="grupo">Grupo:</label>
            <input type="text" name="grupo" class="form-control" value="{{ $despesa->grupo }}" required>
        </div>
        <div class="form-group">
            <label for="subgrupo">Subgrupo:</label>
            <input type="text" name="subgrupo" class="form-control" value="{{ $despesa->subgrupo }}" required>
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" step="0.01" name="valor" class="form-control" value="{{ $despesa->valor }}" required>
        </div>

        <!-- Opções de Forma de Pagamento como botões de rádio -->
        <div class="form-group">
            <label>Forma de Pagamento:</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="forma_pagamento" id="credito" value="Crédito" {{ $despesa->forma_pagamento === 'Crédito' ? 'checked' : '' }}>
                    <label class="form-check-label" for="credito">Crédito</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="forma_pagamento" id="debito" value="Débito" {{ $despesa->forma_pagamento === 'Débito' ? 'checked' : '' }}>
                    <label class="form-check-label" for="debito">Débito</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="forma_pagamento" id="dinheiro" value="Dinheiro" {{ $despesa->forma_pagamento === 'Dinheiro' ? 'checked' : '' }}>
                    <label class="form-check-label" for="dinheiro">Dinheiro</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="forma_pagamento" id="pix" value="PIX" {{ $despesa->forma_pagamento === 'PIX' ? 'checked' : '' }}>
                    <label class="form-check-label" for="pix">PIX</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="forma_pagamento" id="transferencia" value="Transferência Bancária" {{ $despesa->forma_pagamento === 'Transferência Bancária' ? 'checked' : '' }}>
                    <label class="form-check-label" for="transferencia">Transferência Bancária</label>
                </div>
            </div>
        </div>

        <!-- Botões "Salvar" e "Cancelar" -->
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('despesas.index') }}" class="btn btn-secondary ml-2">Cancelar</a>
    </form>
</div>
@endsection