<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\User;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = App\Pacientes::orderby('id','asc')->get();
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        return view('pacientes.create', compact('usuarios'));

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
            'FechaDeNacimiento' => 'required',
            'Dirección' => 'required',
            'telefono' => 'required',
            'idUsuario' => 'required'
            ]);
                App\Pacientes::create($request->all());

                return redirect()->route('pacientes.index')
                        ->with('exito','Se ha creado correctamente el paciente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = App\Pacientes::findorfail($id);
        return view('pacientes.view', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = App\Pacientes::findorfail($id);

        $usuarios = User::all();
        return view('pacientes.edit', compact('usuarios', 'paciente'));
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
            'FechaDeNacimiento' => 'required',
            'Dirección' => 'required',
            'telefono' => 'required',
            ]);
            $paciente = App\Pacientes::findorfail($id);

            $paciente->update($request->all());

            return redirect()->route('pacientes.index')
                            -> with('exito','Paciente modificado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = App\Pacientes::findorfail($id);
        $paciente->delete();

        return redirect()->route('pacientes.index')
                        -> with('exito','paciente eliminado correctamente!');
    }
}
