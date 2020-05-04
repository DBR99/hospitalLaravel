<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especialidad extends Model
{
    use SoftDeletes;
    protected $fillable = ['nombre'];

    public function medicos(){
        return $this->hasMany(Medico::class);
    }
}
