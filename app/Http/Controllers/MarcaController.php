<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Familia;

class MarcaController extends Controller
{
    // crea funcion de index,create,store
    public function index()
    {
        $marcas = Marca::all();
        $familias = Familia::all();
        return view('listMarca', compact('marcas','familias'));
    }
    public function create()
    {
        $marcas = Marca::all();
        $familias = Familia::all();
        return view('registrarMarca', compact('marcas','familias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'fecha' => 'required',
            'familia_id' => 'required',
        ]);

        $marca = new Marca();
        $marca->nombre = $request->nombre;
        $marca->fecha = $request->fecha;
        $marca->familia_id = $request->familia_id;
        $marca->save();
        return redirect()->route('marcas.index');
    }
}
