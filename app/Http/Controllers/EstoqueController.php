<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use App\Models\Fornecedores;
use App\Models\Produtos;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    
    public function index()
    {
        //Listagem de registros, e enviar para view


        $estoque = Estoque::all();
        $produtos = Produtos::all();
        $fornecedores = Fornecedores::all();

         
        

        return view('estoque.lista', compact(['estoque','produtos','fornecedores']));
    }


    public function create()
    {
        $produtos = Produtos::all();
        $fornecedores = Fornecedores::all();
        return view('estoque.novo',compact(['produtos','fornecedores']));
    }

    
    public function store(Request $request)
    {
        

        Estoque::create($request->all());
    
        return redirect()->route('estoque');
    }

    
    public function delete($id)
    {
        $produtos = Produtos::all();
        $estoque = Estoque::find($id);
        return view('estoque.excluir', compact(['estoque','produtos']));
    }

   
    public function edit($id)
    {
        

        $estoque = Estoque::find($id);
        $produtos = Produtos::all();
        
        return view('estoque.editar', compact(['estoque','produtos']));
    }

   
    public function update(Request $request, $id)
    {
        $estoque = Estoque::find($id);

        $estoque->update($request->all());
        return redirect()->route('estoque');
    }

   
    public function destroy($id)
    {
        $estoque = Estoque::find($id);
        $estoque->delete($id);
        return redirect()->route('estoque');

    }
}
