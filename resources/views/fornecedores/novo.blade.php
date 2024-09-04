@extends('site')

@section('section')

<main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Cadastro de produtos</h1>
        <form action="{{route('fornecedores.novo')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contato</label>
                <input type='number' class="form-control" name="contato" >
            </div>
            <a href="{{route('fornecedores')}}" type="button" class="btn btn-danger">Voltar</a>
            <button type="submit" class="btn btn-success">Gravar</button>
        </form>


    </div>
</main>

@endsection