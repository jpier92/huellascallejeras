<?php

use App\Http\Controllers\AdoptaController;
use App\Http\Controllers\EnvioEmailController;
use App\Http\Resources\AdopcionResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Adopta;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/adopcion' , function () {
    $animalAdopcion = new Adopta();
    return new AdopcionResource($animalAdopcion->animalesAdopcion());
});

Route::post('/adopta', [AdoptaController::class,'store']);
Route::post('/envio-email', [EnvioEmailController::class,'index']);

// Route::get('/user/{id}', function (string $id) {
//     return new UserResource(User::findOrFail($id));
// });

// Route::get('email-test', function(){
  
//     $details['email'] = 'juanpedrormm92@gmail.com';
  
//     dispatch(new App\Jobs\SendEmailJob($details));

//     dd('done');
// });