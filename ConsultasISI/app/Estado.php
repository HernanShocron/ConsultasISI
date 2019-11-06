<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public function consultas() {
        return $this->belongsToMany(Consulta::CLass, 'consulta_estado');
    }
}
