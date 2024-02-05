@extends('layouts.plantilla')

@section('content')

<h1>Estas seguro de que quieres borrar el perfil de {{$alumno->nombre_apellido}} ?</h1>

<form action="{{route('AlumnoDelete', $alumno->id)}}" method="POST">
    @csrf
    @method('delete')


    <input type="submit" value="Borrrar">

</form>

<a href="{{route('AlumnoIndex')}}">No borrar</a>

@endsection