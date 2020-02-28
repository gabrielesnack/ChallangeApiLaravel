<?php

namespace App\Services\User;

use Illuminate\Http\Request;

class UserCreate
{
    private $request;

    public function __construct(Request $request)
    {
      $this->request = $request;
    }

    public function execute()
    {
        return [
          "error" => false,
          "message" => $this->request->all()
        ];
    }
}