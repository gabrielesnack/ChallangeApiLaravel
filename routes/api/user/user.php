<?php

use Illuminate\Http\Request;

Route::get('/teste/{name}', function (Request $request) {
  return [
      "error" => false,
      "message" => $request->name
  ];
});

Route::get('/teste/{name}', "UserController@IsUserStudent");

Route::post('/create', "User\\UserController@CreateUser");