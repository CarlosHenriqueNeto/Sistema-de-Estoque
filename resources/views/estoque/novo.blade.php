@extends('site')

@section('section')

<main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Entrada de Estoque</h1>
        <form action="{{route('estoque.novo')}}" method="post">
            @csrf
            <div class="mb-3">
                <select class="form-select form-select-lg mb-3" name="id_produto" aria-label="Large select example">
                @foreach($produtos as $produto)    
                <option value="{{$produto->id}}">{{$produto->nome}}</option>
                @endforeach
                    

                </select>
            </div>
            <div class="mb-3">
                <select class="form-select form-select-lg mb-3" name="id_fornecedor" aria-label="Large select example">
                @foreach($fornecedores as $forn)    
                <option value="{{$forn->id}}">{{$forn->nome}}</option>
                @endforeach
                    

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Quantidade</label>
                <input type='number' class="form-control" name="quantidade" >
            </div>
            
            <a href="{{route('estoque')}}" type="button" class="btn btn-danger">Voltar</a>
            <button type="submit" class="btn btn-success">Gravar</button>
        </form>
 


    </div>
</main>

@endsection