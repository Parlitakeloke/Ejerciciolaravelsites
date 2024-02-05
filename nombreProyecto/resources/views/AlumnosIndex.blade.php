@extends('layouts.plantilla')

@section('content')

<table>
    <tr>
        <th>Argazkia</th>
        <th>Izen Abizen</th>
        <th>Adina</th>
        <th>Telefonoa</th>
        <th>Helbidea</th>
        <th></th>
        <th></th>
        <th></th>
        <th>Matrikulak</th>
    </tr>
    @foreach ($alumnos as $alumno )
    <tr>
        <td><img src="{{ asset('storage/app/imagenes/hack.jpg') }}" alt="" style="width: 50px; height: 50px;"></td>
        <td>{{$alumno -> nombre_apellido}}</td>
        <td>{{$alumno -> edad}}</td>
        <td>{{$alumno -> telefono}}</td>
        <td>{{$alumno -> direccion}}</td>
        <td><a href="{{route('AlumnoEdit', $alumno->id)}}">Editatu</a></td>
        <td><a href="{{route('irdelete', $alumno->id)}}">Ezabatu</a></td>
        <td><a href="{{route('AlumnoShow', $alumno->id)}}">Ikastaroak</a></td>
    </tr>
    @endforeach
  
</table>

@endsection