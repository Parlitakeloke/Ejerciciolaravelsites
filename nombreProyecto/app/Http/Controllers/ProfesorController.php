<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $profesor = Profesor::paginate(10);

        return view('ProfesorIndex', compact('profesor'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profesiones = DB::table('profesors')->select('profesion')->distinct()->get();

        return view('ProfesorCreate', compact('profesiones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profesor = new Profesor();

        $profesor->nombreApellido = $request->nombreApellido;

        $profesor->profesion = $request->profesion;

        $profesor->telefono = $request->telefono;

        $profesor->gradoAcademico = $request->gradoAcademico;

        $profesor->save();

        return redirect()->route('profesor.index'); 

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $borrar = "si";
        $profesor = Profesor::find($id);
        return view('ProfesorShow', compact('profesor', 'borrar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $profesor = Profesor::find($id);

        $profesiones = DB::table('profesors')->select('profesion')->distinct()->get();

        return view('ProfesorEdit', compact('profesor', 'profesiones'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $profesor = Profesor::find($id);

        $profesor->update($request->all());

        return redirect()->route('profesor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $profesor = Profesor::findOrFail($id);
        $cursos = Curso::where('profesor_id', $id)->get();

        $cursos->each->delete();
        $profesor->delete();
        return redirect()->route('profesor.index');
    }

    public function enseniar(string $id)
    {
        //
        $borrar = "no";
        $profesor = Profesor::find($id);
        $cursos = Curso::where('profesor_id', $id)->get();
        return view('ProfesorShow', compact('profesor', 'borrar', 'cursos'));
    }
}
