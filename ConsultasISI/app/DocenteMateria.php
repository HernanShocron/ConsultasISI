<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteMateria extends Model
{
    public function alumnos() {
        return $this->belongsToMany(User::class, 'consultas');
    }
}
