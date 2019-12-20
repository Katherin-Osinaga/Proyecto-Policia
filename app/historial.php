<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historial extends Model
{
    public function delincuente()
    {
        return $this->belongsTo('App\delincuente', 'id_delincuente');
    }
}
