<?php
namespace App\Http\Controllers;

use App\Members;
use Illuminate\Http\Request;

class errormessage extends Controller
{
    public function startpage()
    {
      $data = array(
          'memberinfos'  => Members::all()
      );

      return view('errormessage', $data);
    }
    
}

