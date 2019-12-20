<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caso extends Model
{
    public function policia()
    {
        return $this->belongsTo('App\policia', 'id_policia');
    }
    public function delincuente()
    {
        return $this->belongsTo('App\delincuente', 'id_delincuente');
    }
}
