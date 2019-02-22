<?php

namespace App\Http\Controllers;

use App\Member;
use App\Service;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function ProductsList()
    {
      $data = array(
          'memberinfos'  => Member::all(),
          'products' => Service::all(),
      );

      return view('products', $data);
    }
}
