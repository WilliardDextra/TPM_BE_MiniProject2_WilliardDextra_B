<?php

use App\Http\Controllers\Api\AuthApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RecipeApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("/register", [AuthApiController::class,'Register']);
Route::post("/login", [AuthApiController::class,'login']);


Route::get("login", function(){
    return response()->json([
        'success'=>false,
        'message'=>"you sre not log in please login first"
    ]);
});
Route::middleware('auth:api')->group(function () {
    Route::get("/", [RecipeApiController::class,'index']);
    Route::post("/store",[RecipeApiController::class,'save']);
    Route::put("/update/{id}", [RecipeApiController::class,'update']);
    Route::delete('/delete/{id}', [RecipeApiController::class,'delete']);
});


