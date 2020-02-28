<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\User\UserFactory;

class UserController extends Controller
{
    public function CreateUser(Request $request)
    {
        $user = new UserFactory();
        return $user->Create($request);
    }
}
