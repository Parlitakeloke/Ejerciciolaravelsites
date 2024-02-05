@extends('layouts.plantilla')

@section('content')

<table>
    <tr>
        <th>Nombre</th>
        <th>Profesion</th>
        <th>Grado Academico</th>
        <th>Telefonoa</th>
        <th></th>
        <th></th>
        <th></th>
        <th>Matrikulak</th>
    </tr>
    @foreach ($profesor as $prof )
    <tr>
        <td>{{$prof -> nombreApellido}}</td>
        <td>{{$prof -> profesion}}</td>
        <td>{{$prof -> gradoAcademico}}</td>
        <td>{{$prof -> telefono}}</td>
        <td><a href="{{route('profesor.edit', $prof->id)}}">Editatu</a></td>
        <td><a href="{{route('profesor.show', $prof->id)}}">Ezabatu</a></td>
        <td><a href="{{route('ProfesorEnseniar', $prof->id)}}">Mostrar Cursos</a></td>
    </tr>
    @endforeach
  
</table>

@endsection