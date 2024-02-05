<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $cursos = Curso::paginate(10);
        
        return view('CursoIndex', compact('cursos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $borrar = "si";
        $curso = Curso::find($id);
        return view('CursoShow', compact('curso', 'borrar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $curso = Curso::find($id);
        $profesor = Profesor::all();
        $niveles = DB::table('cursos')->select('nivel')->distinct()->get();

        return view('CursoEdit', compact('curso', 'profesor', 'niveles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $curso = Curso::find($id);
        $curso -> update($request->all());
        return redirect()->route('curso.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return redirect()->route('curso.index');
    }
}
