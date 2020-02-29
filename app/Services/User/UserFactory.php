<?php

namespace App\Services\User;

use Illuminate\Http\Request;
use App\Services\User\UserCreate;

class UserFactory {

    public function create(Request $request)
    {
        $user = new UserCreate($request);
        return $user->execute();
    }

}