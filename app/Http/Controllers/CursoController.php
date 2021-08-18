<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos= curso::paginate();
        
        return view('cursos.index', compact('cursos'));
    }
    public function create(){
        return view('cursos.create');
    }


    public function store(Request $request){
        $curso = new curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show',$curso);

    }
    
    public function show($id){

        $curso = curso::find($id);
       

        return view('cursos.show',['curso' => $curso]);
    }

    public function edit(curso $curso){       

        return view('cursos.edit', compact('curso'));
    }
}
