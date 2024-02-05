@extends('layouts.plantilla')

@section('content')

<form action="{{route('AlumnoUpdate', $alumno->id)}}" method="POST">
    @csrf
    @method('put')
    <label for="nombre">Nombre: <input type="text" name="nombre" value="{{$alumno->nombre_apellido}}"></label>
<br>
    <label for="edad">Edad: <input type="text" name="edad" value="{{$alumno->edad}}"></label>
<br>
    <label for="telefono">Telefono: <input type="text" name="telefono" value="{{$alumno->telefono}}"></label>
<br>
    <label for="direccion">Direccion: <input type="text" name="direccion" value="{{$alumno->direccion}}"></label>
<br>
    <input type="submit" value="Guardar">
</form>
@endsection