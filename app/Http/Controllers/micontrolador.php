<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libro;
use App\Models\Heroe;

class micontrolador extends Controller
{
    public function vista2()
    {
        return view('vista2');
    }

    public function vista3()
    {
        return view('vista3');
    }

    public function registralibro()
    {
        return view('registralibro');
    }
    public function guardarlibro(Request $request)
    {
        $libros = new Libro;
        $libros->nombre=$request->input('nombre');
        $libros->genero=$request->input('genero');
        $libros->editorial=$request->input('editorial');
        $libros->save(); 

        return redirect()->route('registrarlibro');
    }
    public function consultalibros(){
        $libros = Libro::all();
        return view('consulta', compact('libros'));
    }

    public function eliminarLibro($id){
        $libro=Libro::find($id);
        $libro->delete();
        return redirect()->route('consultalibros');
    }


    // heroes 

    public function registrarheroe()
    {
        return view('registraheroe');
    }
    public function guardarHeroe(Request $request)
    {
        $heroes = new Heroe;
        $heroes->nombre=$request->input('nombre');
        $heroes->Empresa=$request->input('empresa');
        $heroes->save();

        return redirect()->route('registrarheroe');
    }

    // consultaheroes

    public function consultaheroe(){
        $heroes = Heroe::all();
        return view('consultaheroe', compact('heroes'));
    }

    // eliminarheroes

    public function eliminarheroe($id){
        $heroe=Heroe::find($id);
        $heroe->delete();
        return redirect()->route('consultaheroe');
    }

    // muestra heroe
    public function muestraheroe($id){
        $heroes = Heroe::find($id);
        return view('muestraheroe', compact('heroes'));
    }

    // editar heroe
    
    public function editarheroe(Request $request, $id){
        $heroe=Heroe::find($id);
        $heroe->nombre=$request->input('nombre');
        $heroe->Empresa=$request->input('empresa');
        $heroe->save();
        return redirect()->route('consultaheroe');
    }

}
