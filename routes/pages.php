<?php
//BusinessInfo
Route::get('/business-info','BusinessInfo@startpage');

//Persoonaanbevelen
Route::get('persoonaanbevelen','Persoonaanbevelen@show');
Route::post('persoonaanbevelen','Persoonaanbevelen@mail');

//Error message
// Route::get('/errormessage','Errormessage@startpage');

Route::get('errormessage','Errormessage@show');
Route::post('errormessage','Errormessage@mail');