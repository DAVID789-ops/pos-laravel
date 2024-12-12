<?php

namespace App\Http\Controllers;

use App\Models\Sucursales;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SucursalesController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()->rol != 'Administrador') {
            return redirect('Inicio');
        }
        $sucursales = Sucursales::all();

        return view('modulos.users.Sucursales', compact('sucursales'));
    }


    public function store(Request $request)
    {
        Sucursales::create([
            'nombre' => $request->nombre,
            'estado' => 1
        ]);
        return redirect('Sucursales')->with('success', 'Se ha creado la sucursal correctamente');

    }


    public function edit( $id_sucursal)
    {
        $sucursal = Sucursales::find($id_sucursal);
        return response ()->json($sucursal);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Sucursales::where('id', $request->id)->update([
            'nombre' => $request->nombre
        ]);
        return redirect('Sucursales')->with('success', 'Se ha actualizado la sucursal correctamente');
    }


    public function CambiarEstado($estado, $id_sucursal)
    {
        Sucursales::find($id_sucursal)->update([
            'estado' => $estado
        ]);
        return redirect('Sucursales');
    }
}
