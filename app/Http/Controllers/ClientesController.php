<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;


class ClientesController extends Controller
{

  public function create(Request $request){

    $cliente = new cliente;

    $cliente->nome = $request->nome;
    $cliente->telefone = $request->telefone;
    $cliente->data_nascimento = $request->data_nascimento;
    $cliente->endereco = $request->endereco;
    $cliente->cpf = $request->cpf;
    $cliente->save();
    return response()->json([$cliente]);
}
}
