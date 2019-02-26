<?php
//BusinessInfo
Route::get('/business-info','BusinessInfo@startpage');

//Bedankt pagina na invullen van forms
Route::get('/formthx','FormThankYou@startpage');

//Algemene voorwaarden
Route::get('algemene-voorwaarden' , 'AlgemeneVoorwaarden@startpage');

//Persoonaanbevelen
Route::get('persoonaanbevelen','Persoonaanbevelen@show');
Route::post('persoonaanbevelen','Persoonaanbevelen@mail');

//Error message
Route::get('errormessage','Errormessage@show');
Route::post('errormessage','Errormessage@mail');

//Klacht indienen
Route::get('klachtindienen','Klachtindienen@show');
Route::post('klachtindienen','Klachtindienen@mail');