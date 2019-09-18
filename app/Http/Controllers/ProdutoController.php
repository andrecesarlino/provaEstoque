<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Input;

class ProdutoController extends Controller
{


    public function index()
    {
        return Produto::all();
    }

    public function store(Request $request)
    {
        return Produto::create($request->all());
    }


    public function show($id)
    {
        return Produto::find($id);
    }


    public function update(Request $request, Produto $id)
    {
        $id->update($request->all());
        return $id;
    }

    public function destroy(Produto $id)
    {
        $id->delete();
        return response()->json(null, 204);

    }

    public function vender()
    {
        return Produto::all();
    }

    public function venderUmProd(Produto $id, Request $request)
    {
        // VIA POSTMAN MANDA UM JSON COM PARAMETRO VALOR E COM O ID DO PRODUTO
       $qtd = $id->quantidade;
       if($qtd >= $request->valor) {
           $qtd = $qtd - $request->valor;
           $id->update([
               'quantidade' => $qtd,
           ]);
           return $id;
       } else {
           return "Falta de estoque";
       }
    }

    public function venderVariosProd(Request $request)
    {
//        $valores = json_decode($request->getContent(),true );
//        $valores = json_encode(Input::get('id'));
//        foreach ($valores as $id) {
//            return $id;
//        }
//        for ($i = 1; $i <= count($request->id); $i++) {
//
//            $produto = Produto::find($request->id);
//            $produto->quantidade = 10;
//            return $produto;
//
//        }


    }
}
