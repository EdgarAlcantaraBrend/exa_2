@extends('layout.plantilla')
@section('title','Actualizar')
@section('contenido')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-center">Actualizar datos</h1>
        <div class="col mt-4">
            <form action="{{route('libros.update', $libro)}}" method="post">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="{{$libro->titulo}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="autor">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" value="{{$libro->autor}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="editorial">Editorial</label>
                        <input type="text" class="form-control" id="editorial"  name="editorial" placeholder="Editorial" value="{{$libro->editorial}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fecha_publicacion">Fecha de Publicacion</label>
                        <input type="date" class="form-control" id="fecha_publicacion"  name="fecha_publicacion" placeholder="Fecha de Publicacion" value="{{$libro->fehca_publicacion}}">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="numero_pagina">Numero de paginas</label>
                        <input type="text" class="form-control" id="numero_pagina"  name="numero_pagina" placeholder="Numero de paginas" value="{{$libro->numero_pagina}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection