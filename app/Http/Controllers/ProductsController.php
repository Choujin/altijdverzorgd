<?php

namespace App\Http\Controllers;

use App\Member;
use App\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function ProductsList()
    {
      $data = array(
          'memberinfos'  => Member::all(),
          'products' => Products::all(),
      );

      return view('products', $data);
    }
}
