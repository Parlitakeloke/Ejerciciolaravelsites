@extends('layouts.plantilla')

@section('content')


    <h3>ESTOS SON LOS CURSOS DE {{$alumno->nombre_apellido}}</h3>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Nivel</th>
            <th>Horas Academicas</th>
            <th>Profesor</th>
        </tr>
        @foreach ($cursos as $cur)
        <tr>
        <td>{{$cur->nombre}}</td>
        <td>{{$cur->nivel}}</td>
        <td>{{$cur->horasAcademicas}}</td>
        <td>{{$cur->profesor->nombreApellido}}</td>
        <td>{{$cur->nombre}}</td>
        </tr>
        @endforeach
    </table>



@endsection
