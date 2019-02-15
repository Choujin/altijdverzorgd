<?php
//Step 1 search form
Route::get('/', 'HomePageController@startpage');
//Step 2 product list
Route::get('/products', 'ProductsController@ProductsList');
//Step 3 member list
Route::get('/members', 'MembersListController@memberlistsearch');
//Step 4 profile page

//Step 5 check page

// Step 6 thx
