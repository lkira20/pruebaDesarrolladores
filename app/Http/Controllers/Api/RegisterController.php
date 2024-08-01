<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        User::create($request->all());

        return response()->json(['success' => true, 'message' => 'Usuario registrado exitosamente']);
    }
}
