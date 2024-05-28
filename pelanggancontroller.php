<?php

//file web php

Route::get('/',[FrontController::class,'index']);
Route::get('show/{id}',[FrontController::class,'show']);
Route::get('register',[FrontController::class,'register']);


?>