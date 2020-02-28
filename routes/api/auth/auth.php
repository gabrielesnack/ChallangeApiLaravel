<?php

use Illuminate\Http\Request;

Route::post('/login', 'Auth\\AuthController@login');