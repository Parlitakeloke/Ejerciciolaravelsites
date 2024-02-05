@extends('layouts.plantilla')

@section('content')


<form action="{{route('AlumnoStore')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <label for="nombre">Nombre: <input type="text" name="nombre" ></label>
<br>
    <label for="edad">Edad: <input type="text" name="edad" ></label>
<br>
    <label for="telefono">Telefono: <input type="text" name="telefono" ></label>
<br>
    <label for="direccion">Direccion: <input type="text" name="direccion" value=></label>
    
<br>
    <input type="file" name="foto">
<br>
    <input type="submit" value="Guardar">
</form>


@endsection