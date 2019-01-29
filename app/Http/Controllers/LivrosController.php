<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livro;

class LivrosController extends Controller
{
    public function create(Request $request){
      $livro = new livro;

      $livro->autor = $request->autor;
      $livro->titulo = $request->titulo;
      $livro->editora = $request->editora;
      $livro->versao = $request->versao;
      $livro->qtd_estoque = $request->qtd_estoque;
      $livro->ano_lancamento = $request->ano_lancamento;
      $livro->qtd_emprestada = $request->qtd_emprestada;

      $livro->save();

      return response()->json([$livro]);
    }

    public function show ($id){
      $livro = livro::findOrfail($id);
      return response()->json([$livro]);
    }
    public function update (Request $request, $id){
      $livro = livro::findOrfail($id);
      if($request->id)
        $livro->id = $request->id;
      if($request->autor)
        $livro->autor = $request->autor;
      if($request->titulo)
        $livro->titulo = $request->titulo;
      if($request->editora)
        $livro->editora = $request->editora;
      if($request->versao)
        $livro->versao = $request->versao;
      if($request->qtd_estoque)
        $livro->qtd_estoque = $request->qtd_estoque;
      if($request->ano_lancamento)
        $livro->ano_lancamento = $request->ano_lancamento;
      if($request->qtd_emprestada)
        $livro->qtd_emprestada = $request->qtd_emprestada;

        $livro->save();

      return response()->json([$livro]);
    }

    public function delete($id){
        livro::destroy($id);
        return response()->json(['DELETADO']);
    }

    public function list(){
      return livro::all();
    }
}
