@extends('site')

@section('section')

<main class="container">
    <div class="bg-body-tertiary p-5 rounded">
        <h1>Exclusão de produtos</h1>
        <form action="{{route('estoque.excluir',['id' =>$estoque->id])}}" method="post">
        @csrf
        @method('DELETE')
            <div class="mb-3">
                <select class="form-select form-select-lg mb-3" name="id_produto" disabled aria-label="Large select example">
                @foreach($produtos as $produto)    
                <option @if($produto->id == $estoque->id_produto) selected @endif value="{{$produto->id}}">{{$produto->nome}}</option>
                @endforeach
                    

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Quantidade</label>
                <input type='number' value="{{$estoque->quantidade}}"class="form-control" disabled name="quantidade" >
            </div>
            
            <a href="{{route('estoque')}}" type="button" class="btn btn-second">Voltar</a>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
 


    </div>
</main>

@endsection