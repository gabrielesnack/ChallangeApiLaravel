<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->middleware('jwt.auth:api', ['except' => ['login']]);
    }

    public function login()
    {
        $credentials = $this->request->only(['email', 'password']);
        $user = User::where($credentials)->first();

        if ($user != null) {
          return auth()->login($user);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function logout() {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function me() {
        return response()->json(auth()->user());
    }
}
