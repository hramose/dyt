<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Medicamento;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamentos = Medicamento::all();
        return $medicamentos;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $medicamento = new Medicamento(Request::all());
        $medicamento->save();
        return $medicamento;
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $medicamento = Medicamento::find($id);
        $medicamento->nombre_medicamento = Request::input('nombre_medicamento');
        $medicamento->save();

        return $medicamento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medicamento::destroy($id);
    }
}
