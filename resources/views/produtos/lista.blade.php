
@extends('site')

@section('section')

        <main class="container">
            <div class="bg-body-tertiary p-5 rounded">
            <h1>Listagem de produtos</h1>
                <table class="table table-striped">
                     <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOME</th>
                                <th scope="col">CUSTO</th>
                                <th scope="col">VENDA</th>
                                <th scope="col">AÇÕES</th>
                            </tr>
                      </thead>
                                <tbody>
                                    @foreach($produtos as $prod)
                                    <tr>
                                    <th scope="row">{{$prod->id}}</th>
                                    <td>{{$prod->nome}}</td>
                                    <td>{{$prod->custo}}</td>
                                    <td>{{$prod->venda}}</td>
                                    <td><a href="{{route('produto.editar',['id' =>$prod->id])}}" type="button" class="btn btn-warning">EDITAR</a>
                                        <a href="{{route('produto.excluir',['id' =>$prod->id])}}" type="button" class="btn btn-danger">EXCLUIR</a>
                                    </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                    </table>
           

                    <a href="{{route('produto.novo')}}" type="button" class="btn btn-success">Novo Produto</a>
            </div>
        </main>

@endsection
