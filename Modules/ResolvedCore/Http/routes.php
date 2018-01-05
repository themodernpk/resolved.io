<?php

/*
|--------------------------------------------------------------------------
| Core
|--------------------------------------------------------------------------
*/
Route::group(
    [
        'middleware' => 'web',
        'namespace' => 'Modules\ResolvedCore\Http\Controllers'
    ],
    function()
    {
        Route::get('/', 'ResolvedCoreController@index');
    });
