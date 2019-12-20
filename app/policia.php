<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class policia extends Model
{

    protected $fillable = ['nombre','ap_paterno', 'ap_materno', 'direccion', 'telefono', 'id_grado'];

    public function grado()
    {
        return $this->belongsTo('App\grado','id_grado');
    }
}
