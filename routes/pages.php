<?php
//BusinessInfo
Route::get('/business-info','BusinessInfo@startpage');
//Error message
// Route::get('/errormessage','Errormessage@startpage');

Route::get('errormessage','Errormessage@show');
Route::post('errormessage','Errormessage@mail');