<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\User\UserFactory;

class UserController extends Controller
{
    private $request;
    private $userFactory;

    public function __construct(Request $request, UserFactory $user)
    {
        $this->request = $request;
        $this->userFactory = $user;
    }

    public function createUser(Request $request)
    {
        $response = $this->userFactory->create($request);
        return [
            "error" => false,
            "data" => $response
        ];
    }
}
