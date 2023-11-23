<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    public function Autor()
    {
        return $this->belongsTo(Autor::class);
    }
    public function Categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function agregarAlCarrito()
    {
        $carrito = session()->get('carrito', []);
        $carrito[] = $this;
        session()->put('carrito', $carrito);
    }
}
