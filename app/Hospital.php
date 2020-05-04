<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hospital extends Model
{
    use SoftDeletes;
    protected $fillable = ['nombre', 'direccion','telefono'];

    public function medicos(){
        return $this->hasMany(Medico::class);
    }
}
