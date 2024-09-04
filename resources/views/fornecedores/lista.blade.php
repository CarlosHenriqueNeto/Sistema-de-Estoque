
@extends('site')

@section('section')

        <main class="container">
            <div class="bg-body-tertiary p-5 rounded">
            <h1>Fornecedores</h1>
                <table class="table table-striped">
                     <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOME</th>
                                <th scope="col">CONTATO</th>
                                <th scope="col">AÇÕES</th>
                            </tr>
                      </thead>
                                <tbody>
                                    @foreach($fornecedores as $forn)
                                    <tr>
                                    <th scope="row">{{$forn->id}}</th>
                                    <td>{{$forn->nome}}</td>
                                    <td>{{$forn->contato}}</td>
                                    <td><a href="{{route('fornecedores.editar',['id' =>$forn->id])}}" type="button" class="btn btn-warning">EDITAR</a>
                                        <a href="{{route('fornecedores.excluir',['id' =>$forn->id])}}" type="button" class="btn btn-danger">EXCLUIR</a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                    </table>
           

                <a href="{{route('fornecedores.novo')}}" type="button" class="btn btn-success">Novo Fornecedor</a>
            </div>
        </main>

@endsection
