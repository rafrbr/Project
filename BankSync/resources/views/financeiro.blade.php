@extends('layoults.principal')

@section('conteudo')

<main role="main">
  <div class="container-fluid py-4">
    <div class="row">
      <!-- Coluna para Receitas -->
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <!-- Card para Receitas -->
        <div class="card">
          <!-- Cabeçalho do Card -->
          <div class="card-header p-3 pt-2">
            <!-- Conteúdo do Cabeçalho -->
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute"></div>
            <div class="text-end pt-1">
              <p class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">Receitas</p>
              <h3 class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">
                <span style="color: blue">+ R$ 2.300,00</span>
              </h3>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3"></div>
        </div>
      </div>

      <!-- Coluna para Despesas -->
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <!-- Card para Despesas -->
        <div class="card">
          <!-- Cabeçalho do Card -->
          <div class="card-header p-3 pt-2">
            <!-- Conteúdo do Cabeçalho -->
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute"></div>
            <div class="text-end pt-1">
              <p class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">Despesas</p>
              <h3 class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">
                <span style="color: red">- R$ 1.000,00</span>
              </h3>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3"></div>
        </div>
      </div>

      <!-- Coluna para Diferença entre Receitas e Despesas -->
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <!-- Card para Diferença entre Receitas e Despesas -->
        <div class="card">
          <!-- Cabeçalho do Card -->
          <div class="card-header p-3 pt-2">
            <!-- Conteúdo do Cabeçalho -->
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute"></div>
            <div class="text-end pt-1">
              <p class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">Diferença Receitas - Despesas</p>
              <h3 class="text-left text-uppercase text-secondary text-xxs font-weight-bolder">
                <span style="color: Blue">+ R$ 1.300,00</span>
              </h3>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3"></div>
        </div>
      </div>

      <!-- Seção para Relatório Geral -->
      <div class="col-lg-12 mb-4">
        <div class="card">
          <!-- Cabeçalho da Seção -->
          <div class="card-header pb-0">
            <h6 class="text-uppercase text-secondary ls-1 mb-1">Relatório Geral</h6>
          </div>

          <!-- Corpo da Seção -->
          <div class="card-body px-0 pt-0 pb-2">
            <!-- Tabela de Registros Financeiros -->
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Data</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Origem</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tipo</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Valor</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Grupo</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Sub Grupo</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"></th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"></th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Loop através dos dados do modelo Financeiro -->
                  @foreach ($financeiro as $c)
                  <tr>
                    <td>{{ $c->data }}</td>
                    <td>{{ $c->origem }}</td>
                    <td>{{ $c->tipo }}</td>
                    <td>{{ $c->valor }}</td>
                    <td>{{ $c->grupo }}</td>
                    <td>{{ $c->subgrupo }}</td>
                    <!-- Botões de Editar e Deletar -->
                    <td><a class="btn btn-info btn-sm" href="#"><i class="fa fa-cog"></i> Editar</a></td>
                    <td><a class="btn btn-danger btn-sm" href="{{('delete/'.$c->id)}}"><i class="fa fa-trash-o fa-lg"></i> Deletar</a></td>
                  </tr>
                  @endforeach <!-- Fim do Loop -->
                </tbody>
              </table>
            </div>
          </div>

          <!-- Rodapé da Seção -->
          <div class="card-footer py-2">
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalAdicionarReceita">
              <i class="fa fa-plus"></i> Novo Registro
            </button>

            <!-- Modal para Adicionar Nova Receita -->
            <div class="modal fade" id="ModalAdicionarReceita" tabindex="-1" role="dialog" aria-labelledby="modalAdicionarReceitaLabel" aria-hidden="true">
              <!-- Conteúdo do Modal -->
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" id="exampleModalLabel">Incluir nova receita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- Formulário para Adicionar Nova Receita -->
                  <form action="financeiro" method="POST">
                    @csrf
                    <div class="modal-body px-4">
                      <!-- Campos do Formulário -->
                      <div class="mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" class="form-control" name="data" id="data" required>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Origem</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="origem" id="dinheiro" value="Dinheiro" required>
                          <label class="form-check-label" for="dinheiro">Dinheiro</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="origem" id="debito" value="Débito" required>
                          <label class="form-check-label" for="debito">Débito</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="origem" id="credito" value="Crédito" required>
                          <label class="form-check-label" for="credito">Crédito</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="origem" id="pix" value="Pix" required>
                          <label class="form-check-label" for="pix">Pix</label>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="grupo" class="form-label">Grupo</label>
                        <input type="text" class="form-control" name="grupo" placeholder="Ex: Carro" required>
                      </div>
                      <div class="mb-3">
                        <label for="subgrupo" class="form-label">Sub Grupo</label>
                        <input type="text" class="form-control" name="subgrupo" placeholder="Ex: Combustível" required>
                      </div>
                      <div class="mb-3">
                        <label for="valor" class="form-label">Valor</label>
                        <input type="number" class="form-control" name="valor" placeholder="R$" required>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Tipo</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tipo" id="receita" value="1" required>
                          <label class="form-check-label" for="receita">Receita</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tipo" id="despesa" value="0" required>
                          <label class="form-check-label" for="despesa">Despesa</label>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Botões para Salvar e Cancelar -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <input type="submit" class="btn btn-success" value="Salvar">
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</main>

@endsection <!-- Fim da Seção de Conteúdo -->