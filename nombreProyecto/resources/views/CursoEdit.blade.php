@extends('layouts.plantilla')

@section('content')


<form action="{{route('curso.update', $curso->id)}}" method="POST">
    @csrf
    @method('put')
    <label for="nombre">Nombre: <input type="text" name="nombre" value="{{$curso->nombre}}"></label>
<br>
    <label for="nivel">Nivel: 
        <select name="nivel" id="nivel">
            @foreach ($niveles as $nivel)
                <option value="{{$nivel->nivel}}">{{$nivel->nivel}}</option>
            @endforeach
        </select>
    </label>
<br>
    <label for="horasAcademicas">Horas Academicas: <input type="text" name="horasAcademicas" value="{{$curso->horasAcademicas}}"></label>
<br>
    <select name="profesor_id" id="profesor">
        @foreach ($profesor as $profesores)
            <option value="{{$profesores->id}}">{{$profesores->nombreApellido}}</option>        
        @endforeach
    </select>
<br>
    <input type="submit" value="Guardar">
</form>


@endsection