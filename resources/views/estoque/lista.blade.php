
@extends('site')

@section('section')

        <main class="container">
            <div class="bg-body-tertiary p-5 rounded">
            <h1>ESTOQUE</h1>
                <table class="table table-striped">
                     <thead>
                            <tr>
                                <th scope="col">ID ESTOQUE</th>
                                <th scope="col">NOME</th>
                                <th scope="col">FORNECEDOR</th>
                                <th scope="col">QUANTIDADE</th>
                                <th scope="col">AÇÕES</th>
                            </tr>
                      </thead>
                                <tbody>

                                @foreach($estoque as $est)
                                
                                    <tr>
                                            <th scope="row">{{$est->id}}</th>
                                            <td>@foreach($produtos as $prod)
                                                @if($prod->id == $est->id_produto) {{$prod->nome}} @endif
                                                @endforeach
                                            </td>

                                            <td>@foreach($fornecedores as $forn)
                                                @if($forn->id == $est->id_fornecedor) {{$forn->nome}} @endif
                                                @endforeach
                                            </td>

                                            <td>{{$est->quantidade}}</td>
                                            <td><a href="{{route('estoque.editar',['id' =>$est->id])}}" type="button" class="btn btn-warning">EDITAR</a>
                                                <a href="{{route('estoque.excluir',['id' =>$est->id])}}" type="button" class="btn btn-danger">EXCLUIR</a>
                                            </td>
                                    </tr>
                                   
                                @endforeach
                                </tbody>
                    </table>
           

                    <a href="{{route('estoque.novo')}}" type="button" class="btn btn-success">Entrada</a>
            </div>
        </main>

@endsection
