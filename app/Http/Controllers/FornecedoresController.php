<?php

namespace App\Http\Controllers;

use App\Models\Fornecedores;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedores::all();
        

        return view('fornecedores.lista', compact('fornecedores'));
    }


    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        Fornecedores::create($request->all());
        return redirect()->route('fornecedores');
    }

    
    public function delete($id)
    {
        $fornecedores = Fornecedores::find($id);
        return view('fornecedores.excluir', compact('fornecedores'));
    }

   
    public function edit($id)
    {
        $fornecedores = Fornecedores::find($id);
        return view('fornecedores.editar', compact('fornecedores'));
    }

   
    public function update(Request $request, $id)
    {
        $fornecedores = Fornecedores::find($id);

        $fornecedores->update($request->all());
        return redirect()->route('fornecedores');
    }

   
    public function destroy($id)
    {
        $fornecedores = Fornecedores::find($id);
        $fornecedores->delete($id);
        return redirect()->route('fornecedores');

    }
}
