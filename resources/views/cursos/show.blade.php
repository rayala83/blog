@extends('layouts.plantilla')

@section('title','Cursos' .  $curso->name)

@section('content')

<<h1>Bienvenido al curso: {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">Volver a Cursos</a>
<br>
<a href="{{route('cursos.edit', $curso)}}">Editar Cursos</a>

<p><strong>Categoria: </strong>{{$curso->categoria}}</p>
<p>{{$curso->descripcion}}</p>
    
@endsection

