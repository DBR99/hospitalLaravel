<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\consulta;

class DiagnosticosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnostico = App\Diagnosticos::orderby('id','asc')->get();
        return view('diagnostico.index', compact('diagnostico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $consulta = Consulta::all();
        return view('diagnostico.create', compact('consulta'));

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
            'idMedico' => 'required',
            'idPaciente' => 'required',
            'descripcion' => 'required'
            ]);
                App\Diagnosticos::create($request->all());

                return redirect()->route('diagnostico.index')
                        ->with('exito','Se ha creado correctamente el diagnóstico!');
     }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnostico = App\diagnosticos::findorfail($id);
        return view('diagnostico.view', compact('diagnostico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = consulta::all();

        $diagnostico = App\diagnosticos::findorfail($id);

        return view('diagnostico.edit', compact('diagnostico','consulta'));
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
            'idConsulta' => 'required'
            ]);

                $diagnostico = App\Diagnosticos::findorfail($id);

                $diagnostico->update($request->all());

                return redirect()->route('diagnostico.index')
                                -> with('exito','Diagnóstico modificado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diagnostico = App\diagnosticos::findorfail($id);
        $diagnostico->delete();

        return redirect()->route('diagnostico.index')
                        -> with('exito','Diagnóstico eliminado correctamente!');
    }
}
