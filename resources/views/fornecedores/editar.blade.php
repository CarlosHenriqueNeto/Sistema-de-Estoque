@extends('site')

@section('section')

<main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Alteração de Fornecedor</h1>
        <form action="{{route('fornecedores.editar',['id' =>$fornecedores->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" value= "{{$fornecedores->nome}}" name="nome" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contato</label>
                <input type='number' class="form-control" value= "{{$fornecedores->contato}}" name="contato" >
            </div>
            <a href="{{route('fornecedores')}}" type="button" class="btn btn-danger">Voltar</a>
            <button type="submit" class="btn btn-success">Gravar</button>
        </form>
 


    </div>
</main>

@endsection