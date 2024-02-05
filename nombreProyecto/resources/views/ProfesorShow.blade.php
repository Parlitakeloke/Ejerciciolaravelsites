@extends('layouts.plantilla')

@section('content')


@if($borrar == 'si')

<h1>ESTAS SEGURO DE QUE DESEAS BORRAR EL PERFIL DE {{$profesor->nombreApellido}} ?</h1>

<form action="{{route('profesor.destroy', $profesor->id)}}" method="POST">
    @csrf
    @method('delete')


    <input type="submit" value="Borrrar">

</form>

<a href="{{route('profesor.index')}}">No borrar</a>
@else

<h1>Estos son los cursos que imparte el profesor{{$profesor->nombreApellido}}</h1>


<table>
    <tr>
    <td>Nombre</td>
    <td>Nivel</td>
    <td>Horas Academicas</td>
    </tr>
    @foreach ($profesor->curso as $cursos)
    <tr>
    <td>{{$cursos->nombre}}</td>
    <td>{{$cursos->nivel}}</td>
    <td>{{$cursos->horasAcademicas}}</td>
    </tr>
    @endforeach
</table>

@endif
@endsection