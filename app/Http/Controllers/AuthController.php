<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        // autenticacao email e senha

        $credenciais = $request->all(['email', 'password']);
        $token = auth('api')->attempt($credenciais);

        if ($token) { // autenticado com sucesso
            return response()->json(['token' => $token]);
        } else { //erro de email ou senha
            return response()->json(['erro' => 'Usuário ou senha inválido!'], 403);
        }
    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json([
            'msg' => 'Logout realizado com sucesso!'
        ]);
    }

    public function refresh()
    {
        /** @var \Tymon\JWTAuth\JWTGuard $authGuard */

        $authGuard = auth('api');
        $token = $authGuard->refresh();
        return response()->json([
            'token' => $token,
        ]);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }
}
