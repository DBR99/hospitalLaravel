<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medico extends Model
{
    use SoftDeletes;
    protected $fillable = ['idUsuario', 'idHospital', 'idEspecialidad', 'telefono','direccion'];


    public function especialidad(){
        return $this->belongsTo(Especialidad::class, 'idEspecialidad');
    }

    public function hospital(){
        return $this->belongsTo(Hospital::class, 'idHospital');
    }
}
