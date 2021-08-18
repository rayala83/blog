@extends('layouts.plantilla')

@section('title','Cursos edit')

@section('content')

<h1>Editar un Curso</h1>

<form action = "{{route('cursos.store')}}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input type = 'text'  name = 'name' values= "{{$curso->name}}">
    </label>
    
    <br>
    <label>
        Descripcion:
        <br>
        <textarea name = 'descripcion'  rows = '5'>{{$curso->descripcion}}</textarea>
    </label>
    
    <br>
    <label>
        Categoria:
        <br>
        <input type = 'text'  name = 'categoria' values= "{{$curso->categoria}}">
    </label>
    <br>
    <button type="submit"> Actualizar Formulario</button>

            
       

</form>    
    
@endsection
