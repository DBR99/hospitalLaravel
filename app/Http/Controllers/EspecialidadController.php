<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidades = App\Especialidad::orderby('nombre','asc')->get();
        return view('especialidad.index', compact('especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('especialidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required']);

       App\Especialidad::create($request->all());

       return redirect()->route('especialidad.index')
                        ->with('exito','Se ha creado correctamente la especialidad médica!');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $especialidad = App\Especialidad::findorfail($id);
        return view('especialidad.view', compact('especialidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialidad = App\Especialidad::findorfail($id);

        return view('especialidad.edit', compact('especialidad'));
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
        $request->validate([
            'nombre' => 'required' ]);

                $especialidad = App\Especialidad::findorfail($id);

                $especialidad->update($request->all());

                return redirect()->route('especialidad.index')
                                -> with('exito','Especialidad modificada con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $especialidad = App\Especialidad::findorfail($id);

        //con esta se ejecuta la accion de eliminar
        $especialidad->delete();

        return redirect()->route('especialidad.index')
                        -> with('exito','especialidad eliminada correctamente!');
     }
}
