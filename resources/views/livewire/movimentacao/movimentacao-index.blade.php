<div>
    <div class="container">
         <div class="d-flex justify-content-between align-items-center mb-4"> 
            <h2 class="mb-0">Gestão de Estoque</h2>
            <div class="d-flex gap-2">
                <a class="btn btn-secondary" href="{{route('movimentacao.create')}}">Movimentações</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5>Movimentações de produtos</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                     <thead>
                        <tr>
                            <td>Data</td>
                            <td>Produtos</td>
                            <td>Tipos</td>
                            <td>Quantidade</td>
                            <td>Usuário</td>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($movimentacoes as $movimentacao)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($movimentacao->data_movimentacao)->format('d/m/Y')}}</td>
                            <td>{{$movimentacao->produto ->nome}} - {{$movimentacao->produto_id}}</td>
                            <td>
                                @if($movimentacao->tipo == 'entrada')
                                 <span class="badge bg-primary">Entrada</span>
                     
                                @else
                                    <span class="badge bg-danger">Saída</span>

                                @endif
                            </td>
                            <td>{{$movimentacao->quantidade}}</td>
                            <td>{{$movimentacao->user ->name}} - {{$movimentacao->user_id}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
