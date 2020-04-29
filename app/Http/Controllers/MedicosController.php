<?php

namespace App\Http\Controllers;

use App\Medicos;
use Illuminate\Http\Request;

class MedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['medicos']=Medicos::paginate(5);
        return view('medicos.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosMedico=request()->all();

        $datosMedico=request()->except('_token');

        Medicos::insert($datosMedico);

       // return response()->json($datosMedico);
       return redirect('medicos')->with('Mensaje','Médico creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function show(Medicos $medicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico= Medicos::findOrFail($id);

        return view('medicos.edit',compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosMedico=request()->except(['_token','_method']);
        Medicos::where('id','=',$id)->update($datosMedico);

       // $medico= Medicos::findOrFail($id);
       // return view('medicos.edit',compact('medico'));
       return redirect('medicos')->with('Mensaje','Médico actualizado exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    Medicos::destroy($id);
    return redirect('medicos')->with('Mensaje','Médico eliminado');
}
}
