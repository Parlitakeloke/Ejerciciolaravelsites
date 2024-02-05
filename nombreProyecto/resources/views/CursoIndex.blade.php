@extends('layouts.plantilla')

@section('content')


<table>
<tr>
    <th>Nombre</th>
    <th>Nivel</th>
    <th>Horas Academicas</th>
    <th>Profesor</th>
    <th>Editar</th>
</tr>
@foreach ($cursos as $curso)
<tr>
<td>{{$curso->nombre}}</td>
<td>{{$curso->nivel}}</td>
<td>{{$curso->horasAcademicas}}</td>
<td>{{$curso->profesor->nombreApellido}}</td>
<td><a href="{{route('curso.edit', $curso->id)}}">Editar</a></td>
<td><a href="{{route('curso.show', $curso->id)}}">Borrar</a></td>
</tr>
@endforeach
</table>


@endsection