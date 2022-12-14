<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libro;

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
}
