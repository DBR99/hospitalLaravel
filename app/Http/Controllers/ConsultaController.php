<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\User;


class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultas = App\Consulta::orderby('id','asc')->get();
        return view('consultas.index', compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $usuarios = User::all();

        return view('consultas.create', compact('usuarios'));
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
            'idUsuario' => 'required',
            'idMedico' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            ]);
                App\Consulta::create($request->all());

                return redirect()->route('consultas.index')
                        ->with('exito','Se ha creado correctamente la consulta!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $consulta = App\consulta::findorfail($id);
        return view('consultas.view', compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios = User::all();

        $consulta = App\Consulta::findorfail($id);

        return view('consultas.edit', compact('medico','consultas'));
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
            'idUsuario' => 'required',
            'idMedico' => 'required',
            'fecha' => 'required',
            'hora' => 'required']);

                $consulta = App\Consulta::findorfail($id);

                $consulta->update($request->all());

                return redirect()->route('consultas.index')
                                -> with('exito','Consulta modificada con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consulta = App\consulta::findorfail($id);
        $consulta->delete();

        return redirect()->route('consultas.index')
                        -> with('exito','Consulta eliminada correctamente!');
    }
}
