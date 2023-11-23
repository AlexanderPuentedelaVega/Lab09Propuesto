@extends('layouts.app')

@section('content')
    <div class="container">
        <h5>Catálogo de Libros</h5>

        <div class="row row-cols-3 mt-5">
            @foreach($libros as $libro)
                <div class="col">
                    <div class="card">
                        
                        <img src="/ruta/de/la/portada/{{$libro->portada}}" height="200" alt="{{$libro->nombre}}">
                        
                        <div class="card-body">
                            <h5 class="card-title">{{$libro->nombre}}</h5>
                            <p class="card-text">Autor: {{$libro->autor->nombreCompleto()}}</p>
                            <p class="card-text">Editorial: {{$libro->editorial}}</p>
                            <p class="card-text">Precio: {{$libro->precio}}</p>

                            
                            
                            <form action="{{ route('agregarAlCarrito', ['id' => $libro->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection