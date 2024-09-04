@extends('site')

@section('section')

<main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Cadastro de produtos</h1>
        <form action="{{route('produto.novo')}}" method="post">
        @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" >
            </div>
            <div class="mb-3">
                <label for="custo" class="form-label">Custo</label>
                <input type='number' class="form-control" name="custo" >
            </div>
            <div class="mb-3">
                <label for="venda" class="form-label">Venda</label>
                <input type="number" class="form-control" name="venda" >
            </div>
            <a href="{{route('produtos')}}" type="button" class="btn btn-danger">Voltar</a>
            <button type="submit" class="btn btn-success">Gravar</button>
        </form>
 


    </div>
</main>

@endsection