@extends('layouts.principal')
<link rel="stylesheet" href="{{ asset('css/financeiro.css') }}">
@section('conteudo')
<main role="main">
    <div class="container-fluid py-4">
        <!-- Saudação ao Usuário -->
        <div class="text-left mb-4">
            <h2 class="text-uppercase text-secondary text-xxl font-weight-bolder">Bem-vindo, {{ Auth::user()->name }}!</h2>
            <p class="text-uppercase text-secondary text-xxs font-weight-bolder">Ao sistema financeiro pessoal da BankSync</p>
        </div>

        <!-- Filtro de Datas -->
        <form method="GET" action="{{ route('financeiro.index') }}">
            <div class="form-row">
                <div class="col-md-5 mb-3">
                    <label for="data_inicio">Data de Início</label>
                    <input type="date" class="form-control" id="data_inicio" name="data_inicio" value="{{ $dataInicio }}">
                </div>
                <div class="col-md-5 mb-3">
                    <label for="data_fim">Data de Término</label>
                    <input type="date" class="form-control" id="data_fim" name="data_fim" value="{{ $dataFim }}">
                </div>
                <div class="col-md-2 mb-3">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
            </div>
        </form>

        <div class="row">
            <!-- Coluna para Receitas -->
            <div class="col-xl-4 col-md-6 mb-4">
                <!-- Card para Receitas -->
                <div class="card">
                    <!-- Cabeçalho do Card -->
                    <div class="card-header p-3 pt-2">
                        <!-- Conteúdo do Cabeçalho -->
                        <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute"></div>
                        <div class="text-end pt-1">
                            <p class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">Receitas</p>
                            <h3 class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">
                                <span style="color: blue">+ R$ {{ number_format($totalReceitas, 2, ',', '.') }}</span>
                            </h3>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3"></div>
                </div>
            </div>

            <!-- Coluna para Despesas -->
            <div class="col-xl-4 col-md-6 mb-4">
                <!-- Card para Despesas -->
                <div class="card">
                    <!-- Cabeçalho do Card -->
                    <div class="card-header p-3 pt-2">
                        <!-- Conteúdo do Cabeçalho -->
                        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute"></div>
                        <div class="text-end pt-1">
                            <p class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">Despesas</p>
                            <h3 class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">
                                <span style="color: red">- R$ {{ number_format($totalDespesas, 2, ',', '.') }}</span>
                            </h3>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3"></div>
                </div>
            </div>

            <!-- Coluna para Saldo do Mês Atual -->
            <div class="col-xl-4 col-md-6 mb-4">
                <!-- Card para Saldo do Mês Atual -->
                <div class="card">
                    <!-- Cabeçalho do Card -->
                    <div class="card-header p-3 pt-2">
                        <!-- Conteúdo do Cabeçalho -->
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute"></div>
                        <div class="text-end pt-1">
                            <p class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">Saldo (Mês Atual)</p>
                            <h3 class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">
                                @if($saldoMesAtual >= 0)
                                <span style="color: green">+ R$ {{ number_format($saldoMesAtual, 2, ',', '.') }}</span>
                                @else
                                <span style="color: red">- R$ {{ number_format(abs($saldoMesAtual), 2, ',', '.') }}</span>
                                @endif
                            </h3>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Botão para imprimir o relatório -->
<div class="row mt-4">
    <div class="col-md-6 offset-md-3 text-center">
        <button class="btn btn-primary" onclick="imprimirRelatorio()">Imprimir Relatório</button>
    </div>
</div>
</div>

<script>
    function imprimirRelatorio() {
        window.print(); // Isso acionará a caixa de diálogo de impressão do navegador
    }
</script>
<script src="{{ asset('js/financeiro.js') }}"></script>
@endsection