<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Materia extends Model
{
    public function docentes() {
        return $this->belongsToMany(User::CLass, 'docente_materia');
    }
}
