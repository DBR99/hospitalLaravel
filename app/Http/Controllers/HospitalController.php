<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitales = App\Hospital::orderby('nombre','asc')->get();
        return view('hospital.index', compact('hospitales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('hospital.create');
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
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required' ]);

       App\Hospital::create($request->all());

       return redirect()->route('hospital.index')
                        ->with('exito','Se ha creado el hospital correctamente!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hospital = App\Hospital::findorfail($id);
        return view('hospital.view', compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital = App\Hospital::findorfail($id);

        return view('hospital.edit', compact('hospital'));    }

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
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required'
                ]);

                $hospital = App\Hospital::findorfail($id);

                $hospital->update($request->all());

                return redirect()->route('hospital.index')
                                -> with('exito','Hospital modificado con exito!');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hospital = App\Hospital::findorfail($id);

        //con esta se ejecuta la accion de eliminar
        $hospital->delete();

        return redirect()->route('hospital.index')
                        -> with('exito','hospital eliminado correctamente!');

    }
}
