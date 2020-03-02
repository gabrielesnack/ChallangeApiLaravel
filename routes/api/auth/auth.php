<?php

use Illuminate\Http\Request;

Route::post('/login', 'Auth\AuthController@login');

Route::post('/logout', 'Auth\AuthController@logout');

Route::post('/me', 'Auth\AuthController@me');
