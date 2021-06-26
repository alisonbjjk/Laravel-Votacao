<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'senha' => 'required'
        ], [
            'email.required' => 'Campo de E-mail é Obrigatório',
            'senha.required' => 'Campo de Senha é Obrigatório'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->senha
        ])) {
            dd('Tudo Certo');
        } else {
            dd("Erro!");
        }
    }
}
