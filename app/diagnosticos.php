<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class diagnosticos extends Model
{
    use SoftDeletes;
    protected $fillable = ['idConsulta','descripcion'];

}
