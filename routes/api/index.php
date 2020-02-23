<?php

use Illuminate\Http\Request;


/*
//                  API v1
*/

    Route::prefix('/v1')->group(function () {
        $path = "routes/api/";

        Route::prefix('/user')
        ->group(base_path( $path . 'user/user.php'));

    });

/*
//                  API v2
//          example to factory system
*/

    Route::prefix('/v2')->group(function () {
        $path = "routes/api/";

        Route::prefix('/user')
        ->group(base_path( $path . 'user/user2.php'));

    });


