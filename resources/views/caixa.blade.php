@extends('layouts.admin')
@section('conteudo')
<div class="container" style="width: 95%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="text-align: center;" style="width: 50%">
            <h1>Controle de Caixa <a href="create"></a></h1>
        </div>
        <div class="form-inline" style="text-align: center;">
            {{Form::open(['url' => '/home/buscar', 'method' => 'GET'])}}
                {{Form::date('dataBusca', isset($_GET['dataBusca']) ? $_GET['dataBusca'] : date('Y-m-d'), ['class' => 'form-control']) }}
                {{Form::submit('Buscar', ['class' => 'btn btn-default']) }}
            {{Form::close()}}
        </div>
    </div>
    <hr>
    <div class="row">
        <table class="table" style="margin-left: 5px">
            <thead>
                <tr>
                <th>Tipo</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse($caixas as $caixa)
                  <tr>
                    @if($caixa->tipo == 1)
                        <td>Entrada</td>
                    @else
                        <td>Saída</td>
                    @endif
                    <td> {{date('d/m/Y', strtotime($caixa->data))}} </td>
                    <td>{{$caixa->descricao}}</td>
                    <td>R$ &nbsp;{{$caixa->preco}}</td>
                    <td>
                    <div class="form-inline">
                        <button class="edit-btn"><a href="{{ url('home/'.$caixa->id.'/edit') }}"><i class="glyphicon glyphicon glyphicon-edit"></i></a>Editar</button>
                        <button class="delete-btn"><a href="{{ url('home/'.$caixa->id.'/delete') }}"><i class="glyphicon glyphicon glyphicon-trash"></i></a>Excluir</button>
                    </div>
                  </tr>
                @empty
                    <div style="text-align: center;">
                        <h3><b>Caixa em branco</b></h3>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
