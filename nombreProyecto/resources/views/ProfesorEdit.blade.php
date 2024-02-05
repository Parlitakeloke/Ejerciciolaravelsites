@extends('layouts.plantilla')

@section('content')



<form action="{{route('profesor.update', $profesor->id)}}" method="POST">
    @csrf
    @method('put')
    <label for="nombre">Nombre: <input type="text" name="nombreApellido" value="{{$profesor->nombreApellido}}"></label>
<br>
    <label for="profesiones">Profesiones: 
        <select name="profesion" id="profesion">
            @foreach ($profesiones as $profesion)
                <option value="{{$profesion->profesion}}">{{$profesion->profesion}}</option>
            @endforeach
        </select>
    </label>
<br>
    <label for="gradoAcademico">Grado Academico: <input type="text" name="gradoAcademico" value="{{$profesor->gradoAcademico}}"></label>
<br>
    <label for="telefono">Telefono: <input type="text" name="telefono" value="{{$profesor->telefono}}"></label>
<br>
    <input type="submit" value="Guardar">
</form>


@endsection