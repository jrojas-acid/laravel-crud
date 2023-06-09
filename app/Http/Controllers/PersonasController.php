<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        //
        //$datos = Personas::all();
        $datos = Personas::orderBy('id', 'desc')->paginate(4);
        return view('inicio', compact('datos'));
    }

    public function create()
    {
        //
        return view('agregar');
    }

    public function store(Request $request)
    {
        //
        $personas = new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success",  $request->post('nombre') . " ha sido agregado con exito!");
    }

    public function show($id)
    {
        // 
        $persona = Personas::find($id);
        return view('eliminar', compact('persona'));
    }

    public function edit($id)
    {
        // 
        $persona = Personas::find($id);
        return view('actualizar', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        //
        $persona = Personas::find($id);
        $persona->paterno = $request->post('paterno');
        $persona->materno = $request->post('materno');
        $persona->nombre = $request->post('nombre');
        $persona->fecha_nacimiento = $request->post('fecha_nacimiento');
        $persona->save();

        return redirect()->route("personas.index")->with("success",  $request->post('nombre') . " ha sido actualizado con exito!");
    }

    public function destroy($id)
    {
        //
        $persona = Personas::find($id);
        $persona->delete();
        return redirect()->route("personas.index")->with("success",  "Ha sido eliminado con exito!");
    }
}
