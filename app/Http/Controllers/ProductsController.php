<?php

namespace App\Http\Controllers;

use App\Members;
use App\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function ProductsList()
    {
      $data = array(
          'memberinfos'  => Members::all(),
          'products' => Products::all(),
      );

      return view('products', $data);
    }
}
