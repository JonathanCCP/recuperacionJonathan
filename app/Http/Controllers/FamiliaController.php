<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Familia;

class FamiliaController extends Controller
{
      // crea funcion de index,create,store
      public function index()
      {
          $familias = Familia::all();
          return view('listFamilia', compact('familias'));
      }
      public function create()
      {
          $familias = Familia::all();
          return view('registrarFamilia', compact('familias'));
      }
  
      public function store(Request $request)
      {
          $request->validate([
              'nombre' => 'required|max:100',
              'fecha' => 'required',
          ]);
  
          $familia = new Familia();
          $familia->nombre = $request->nombre;
          $familia->fecha = $request->fecha;
          $familia->save();
          return redirect()->route('familias.index');
      }

    public function edit($id)
    {
        $familia = Familia::findOrFail($id);
        return view('editarFamilia', compact('familia'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'fecha' => 'required',
        ]);

        $familia = Familia::findOrFail($id);
        $familia->nombre = $request->nombre;
        $familia->fecha = $request->fecha;
        $familia->save();
        return redirect()->route('familias.index');
    }
  }


