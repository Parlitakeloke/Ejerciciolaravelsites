<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $alumnos = Alumno::paginate(10);

        return view('AlumnosIndex', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('AlumnoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {





        $alumno = new Alumno();

        $alumno->nombre_apellido = $request->nombre;

        $alumno->edad = $request->edad;

        $alumno->telefono = $request->telefono;

        $alumno->direccion = $request->direccion;


        $file_name = $_FILES['foto']['name'];

        // Obtener el nombre del usuario (reemplaza 'nombre_de_usuario' con la lógica real para obtener el nombre del usuario)
        $user_name = $request->nombre;

        // Obtener la extensión del archivo
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

        // Crear un nuevo nombre para el archivo basado en el nombre del usuario
        $new_file_name = $user_name . '.' . $file_extension;

        // Ruta del directorio donde deseas guardar el archivo
        $upload_directory = base_path('/storage/app/public/imagenes');

        // Ruta completa del nuevo archivo
        $new_file_path = $upload_directory.'/'.$new_file_name;
        //mover
        move_uploaded_file($_FILES['foto']['tmp_name'], $new_file_path);



        $alumno->foto = $new_file_name;

        $alumno->save();

        return redirect()->route('AlumnoIndex');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $alumno = Alumno::find($id);
        $cursos = $alumno->cursos;

        return view('AlumnoShow', compact('cursos', 'alumno'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $alumno = Alumno::find($id);
        return view('AlumnoEdit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $alumno = Alumno::find($id);

        $alumno->update($request->all());

        return redirect()->route('AlumnoIndex');
    }



    public function irDestroy(string $id)
    {
        $alumno = Alumno::find($id);
        return view('AlumnoDestroy', compact('alumno'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $alumnos = Alumno::findOrFail($id);
        $alumnos->delete();
        return redirect()->route('AlumnoIndex');
    }
}
