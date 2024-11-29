<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{

 /**
    *public function PrimerUsuario(){
    *    User::create([
           * 'name' => 'Primer Usuario',
          *  'email' => 'admin@gmail.com',
         *   'foto' => '',
        *    'password' => Hash::make('123'),
       *     'ultimo_login' => '',
      *      'rol' => 'Administrador',
    **        'estado' => 1,
   *         'id_sucursal' => 0,
  *      ]);
 *   }
*/
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
