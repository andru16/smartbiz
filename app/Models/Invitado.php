<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    use HasFactory;

    public function obtenerNombreCompleto(){
        return $this->nombres. ' ' .$this->apellidos;
    }
}
