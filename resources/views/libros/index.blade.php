@extends('layout.plantilla')
@section('title','Lista' )
@section('contenido')

<div class="row">
    <div class="col">
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITULO</th>
                    <th scope="col">AUTOR</th>
                    <th scope="col">EDITORIAL</th>
                    <th scope="col">FECHA PUBLICACION</th>
                    <th scope="col">PAGINAS</th>
                    <th scope="col">ACTUALIZAR</th>
                    <th scope="col">ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                @foreach($libro as $libros)
                <tr>
                    <th scope="row">{{$libros->id}}</th>
                    <th>{{$libros->titulo}}</th>
                    <th>{{$libros->autor}}</th>
                    <th>{{$libros->editorial}}</th>
                    <th>{{$libros->fecha_publicacion}}</th>
                    <th>{{$libros->numero_pagina}}</th>
                    <th>
                        <button type="button" class="btn btn-success">
                            <a style="color: white;" href="{{route('libros.actualizar', $libros)}}"><i class="fas fa-edit"></i></a>
                        </button></th>
                    <th>
                        <form action="{{route('libros.eliminar',$libros)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash" ></i></button></th>
                        </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('pagina')
{{$libro->links()}}
@endsection