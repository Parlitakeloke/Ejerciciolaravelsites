@extends('layouts.plantilla')

@section('content')


<h1>Estas seguro de que quieres borrar el perfil de {{$curso->nombre}} ?</h1>

<form action="{{route('curso.destroy', $curso->id)}}" method="POST">
    @csrf
    @method('delete')


    <input type="submit" value="Borrrar">

</form>

<a href="{{route('curso.index')}}">No borrar</a>


@endsection