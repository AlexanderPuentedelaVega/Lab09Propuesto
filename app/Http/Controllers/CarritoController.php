<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class CarritoController extends Controller
{
    public function agregar(Request $request, $id)
    {
        $libro = Libro::find($id);
        return redirect()->route('libros')->with('success', 'Libro agregado al carrito');
    }
}
