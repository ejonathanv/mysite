<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function account(){
        $admin = auth()->user();
        return view('admin.account.index', compact('admin'));
    }

    public function update_account(Request $request){

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ], [
            'name.required' => 'Por favor ingrese un nombre',
            'name.string' => 'Por favor ingrese un nombre válido',
            'email.required' => 'Por favor ingrese un correo electrónico',
            'email.email' => 'Por favor ingrese un correo electrónico válido',
        ]);

        $admin = auth()->user();
        $admin->name = $request->name;
        $admin->email = $request->email;

        if($request->password){
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ], [
                'password.required' => 'Por favor ingrese una contraseña',
                'password.string' => 'Por favor ingrese una contraseña válida',
                'password.min' => 'La contraseña debe tener al menos 8 caracteres',
                'password.confirmed' => 'Las contraseñas no coinciden',
            ]);
            $admin->password = bcrypt($request->password);
        }

        $admin->save();

        return redirect()->route('account')->with('success', 'Cuenta actualizada correctamente');
    }
}
