<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Especialidad;
use App\Hospital;
use App\User;
use Gate;
class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = App\Medico::orderby('id','asc')->get();
        return view('medicos.index', compact('medicos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        $hospitales = Hospital::all();
        $especialidades = Especialidad::all();


        return view('medicos.create', compact('usuarios','hospitales','especialidades'));


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
            'idHospital' => 'required',
            'idEspecialidad' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
            ]);
                App\Medico::create($request->all());

                return redirect()->route('medicos.index')
                        ->with('exito','Se ha creado correctamente el médico!');
         }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = App\Medico::findorfail($id);
        return view('medicos.view', compact('medico'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios = User::all();
        $hospitales = Hospital::all();
        $especialidades = Especialidad::all();

        $medico = App\Medico::findorfail($id);

        return view('medicos.edit', compact('medico','usuarios','hospitales','especialidades'));
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
            'idHospital' => 'required',
            'idEspecialidad' => 'required',
            'telefono' => 'required',
            'direccion' => 'required' ]);

                $medico = App\Medico::findorfail($id);

                $medico->update($request->all());

                return redirect()->route('medicos.index')
                                -> with('exito','Medico modificado con éxito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = App\Medico::findorfail($id);
        $medico->delete();

        return redirect()->route('medicos.index')
                        -> with('exito','médico eliminado correctamente!');    }
}
