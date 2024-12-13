<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
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

     public function AtualizarMisDatos(Request $request){
        $datos = request();
        if(auth()->user()->email != request('email')){
            if(request('password')){
                $datos = request()->validate([
                    'name' => ['required', 'string', 'max:50'],
                    'email' => ['required', 'email', 'unique:users'],
                    'password' => ['required', 'string', 'min:3'],
                ]);

            } else {
                $datos = request()->validate([
                    'name' => ['required', 'string', 'max:50'],
                    'email' => ['required', 'email', 'unique:users'],
                ]);
            }

        }else{
            if(request('password')){
                $datos = request()->validate([
                    'name' => ['required', 'string', 'max:50'],
                    'email' => ['required', 'email'],
                    'password' => ['required', 'string', 'min:3'],
                ]);

            } else {
                $datos = request()->validate([
                    'name' => ['required', 'string', 'max:50'],
                    'email' => ['required', 'email', 'unique:users'],
                ]);
            }
        }
        if(request('fotoPerfil')){
            if(auth()->user()->foto != ''){
    }
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
