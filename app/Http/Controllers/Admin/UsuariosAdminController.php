<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuariosSalvarRequest;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UsuariosAdminController extends Controller
{

    public function listado()
    {
        $users = User::noSuperAdmin()->paginate(10);
        return view('admin.usuarios.listado', compact('users'));
    }

    public function borrar(User $user)
    {
        $user->delete();
        return redirect()->route('admin.usuarios.listado');
    }

    public function crear()
    {
        return view('admin.usuarios.usuario');
    }

    public function actualizar(UsuariosSalvarRequest $request, User $user)
    {
        $user->name    = $request->get('nombre');
        $user->email   = $request->get('email');
        $user->role_id = $request->get('rol');
        if (!empty($request->get('password'))) {
            $user->password = Hash::make($request->get('password'));
        }
        $user->save();
        return redirect()->route('admin.usuarios.listado', compact('user'));
    }

    public function salvar(UsuariosSalvarRequest $request)
    {
        $user = User::create([
            'name'              => $request->get('nombre'),
            'email'             => $request->get('email'),
            'role_id'           => $request->get('rol'),
            'password'          => Hash::make($request->get('password')),
            'email_verified_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.usuarios.listado');
    }

    public function editar(User $user)
    {
        return view('admin.usuarios.usuario', compact('user'));
    }

}
