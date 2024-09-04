@extends('site')

@section('section')

<main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Exclusão de Fornecedor</h1>
        <form action="{{route('fornecedores.excluir',['id' =>$fornecedores->id])}}" method="post">
        @csrf
        @method('DELETE')
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" disabled value= "{{$fornecedores->nome}}" name="nome" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contato</label>
                <input type='number' class="form-control" disabled value= "{{$fornecedores->contato}}" name="contato" >
            </div>
            <a href="{{route('fornecedores')}}" type="button" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-danger">EXCLUIR</button>
        </form>
 


    </div>
</main>

@endsection