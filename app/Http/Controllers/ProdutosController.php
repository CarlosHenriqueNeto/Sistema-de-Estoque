<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::all();
        

        return view('produtos.lista', compact('produtos'));
    }


    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        
        Produtos::create($request->all());
        return redirect()->route('produtos');
    }

    
    public function delete($id)
    {
        $produtos = Produtos::find($id);
        return view('produtos.excluir', compact('produtos'));
    }

   
    public function edit($id)
    {
        $produtos = Produtos::find($id);
        return view('produtos.editar', compact('produtos'));

    }

   
    public function update(Request $request, $id)
    {
        $produtos = Produtos::find($id);

        $produtos->update($request->all());
        return redirect()->route('produtos');
    }

   
    public function destroy($id)
    {
        $produtos = Produtos::find($id);
        $produtos->delete($id);
        return redirect()->route('produtos');

    }
}
