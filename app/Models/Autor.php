<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    public function Ligro()
    {
        return $this->hasMany(Libro::class);
    }
    public function nombreCompleto()
    {
        return $this->nombre . ' ' . $this->apellido;
    }
}
