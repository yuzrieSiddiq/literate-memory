<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::group([
    'middleware' => ['web', 'auth'],
], function() {
    Route::get('/home', 'HomeController@index');

    // 1. Student
    Route::group([
        'middleware' => ['role:student'],
    ], function () {
        Route::resource('club', 'StudentController');
    });

    // 2. Advisor
    Route::group([
        'middleware' => ['role:advisor']
    ], function() {
        Route::resource('advisor', 'AdvisorController');
    });

    // 3. Student Council
    Route::group([
        'middleware' => ['role:council'],
    ], function () {
        Route::resource('sssc', 'SSSCController');
    });

    // 4. Facilities Manager
    Route::group([
        'middleware' => ['role:facilities_a']
    ], function() {
        Route::resource('facilities', 'FacilitiesAController');
    });

    // 5. Facilities Safety and Health Officer
    Route::group([
        'middleware' => ['role:facilities_b']
    ], function() {
        Route::resource('facilities', 'FacilitiesBController');
    });

    // 6. ITS
    Route::group([
        'middleware' => ['role:its'],
    ], function () {
        Route::resource('its', 'ITSController');
    });

    // 7. SEA Assisstant
    Route::group([
        'middleware' => ['role:sea_a']
    ], function() {
        Route::resource('studentengagement', 'SEAAController');
    });

    // 8. SEA Manager
    Route::group([
        'middleware' => ['role:sea_b'],
    ], function () {
        Route::resource('studentengagement', 'SEABController');
    });

    // 9. Registrar
    Route::group([
        'middleware' => ['role:registrar'],
    ], function () {
        Route::resource('registrar', 'RegistrarController');
    });

    // 10. Finance
    Route::group([
        'middleware' => ['role:finance']
    ], function() {
        Route::resource('finance', 'FinanceController');
    });

    // 8. SEA Manager
    Route::group([
        'middleware' => ['role:execgroup'],
    ], function () {
        Route::resource('execgroup', 'EGController');
    });
});

// NOTE: this is now for quick reference only - to be removed later
// Route::get('/club', function () {
//     return view('club');
// });
//
// Route::get('/advisor', function () {
//     return view('advisor');
// });
//
// Route::get('/sssc', function () {
//     return view('sssc');
// });
//
// Route::get('/studentengagement', function () {
//     return view('studentengagement');
// });
//
// Route::get('/facilities', function () {
//     return view('facilities');
// });
//
// Route::get('/its', function () {
//     return view('its');
// });
//
// Route::get('/registrar', function () {
//     return view('registrar');
// });
//
// Route::get('/finance', function () {
//     return view('finance');
// });
//
// Route::get('/execgroup', function () {
//     return view('execgroup');
// });
