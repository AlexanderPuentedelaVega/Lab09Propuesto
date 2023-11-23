<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::with(['autor', 'categoria'])->get();
        return view('libros.libros', compact('libros'));
    }
    public function mostrarPortada(string $ruta)
        {
            $file = Storage::disk('local')->get($ruta);
            return Image::make($file)->response();
        }
    
}
