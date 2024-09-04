@extends('site')

@section('section')

<main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Exclusãp de produtos</h1>
        <form action="{{route('produto.excluir',['id' =>$produtos->id])}}" method="post">
        @csrf
        @method('DELETE')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text"  disabled value= "{{$produtos->nome}}"class="form-control" name="nome" >
            </div>
            <div class="mb-3">
                <label for="custo" class="form-label">Custo</label>
                <input type='number' disabled value= "{{$produtos->custo}}" class="form-control" name="custo" >
            </div>
            <div class="mb-3">
                <label for="venda" class="form-label">Venda</label>
                <input type="number" disabled value= "{{$produtos->venda}}" class="form-control" name="venda" >
            </div>
            <a href="{{route('produtos')}}" type="button" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
 


    </div>
</main>

@endsection