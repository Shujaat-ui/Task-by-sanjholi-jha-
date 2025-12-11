<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\Formcontroller;
use Mews\Captcha\Fascade\Captcha;
Route::get('/reload-captcha', function () {
    return response()->json(['captcha' => captcha_img()]);
});
Route::get('/form' , [FormController:: class, 'showForm']);
Route::post('/form' , [FormController:: class, 'submitForm']);



