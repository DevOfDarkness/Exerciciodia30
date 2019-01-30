<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emprestimo;
use App\Http\Resources\EmprestimoResource;
class EmprestimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return EmprestimoResource::collection(Emprestimo::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $emprestimo = new emprestimo;

      $emprestimo->status = $request->status;
      $emprestimo->id_livro = $request->id_livro;
      $emprestimo->id_cliente = $request->id_cliente;
      $emprestimo->dataDeTermino = $request->dataDeTermino;
      $emprestimo->dataDeInicio = $request->dataDeInicio;

      $emprestimo->save();

      return new EmprestimoResource($emprestimo);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emprestimo = emprestimo::findOrfail($id);
        return new EmprestimoResource($emprestimo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emprestimo = emprestimo::findOrfail($id);
        if($request->id)
          $emprestimo->id = $request->id;
        if($request->status)
          $emprestimo->status = $request->status;
        if($request->id_livro)
          $emprestimo->id_livro = $request->id_livro;
        if($request->id_cliente)
          $emprestimo->id_cliente = $request->id_cliente;
        if($request->dataDeTermino)
          $emprestimo->dataDeTermino = $request->dataDeTermino;
        if($request->dataDeInicio)
          $emprestimo->dataDeInicio = $request->dataDeInicio;

        $emprestimo->save();

        return new EmprestimoResource($emprestimo);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        emprestimo::destroy($id);
        return response()->json(['DELETED']);
    }
}
