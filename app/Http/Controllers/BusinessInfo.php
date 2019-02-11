<?php
namespace App\Http\Controllers;

use App\Members;

class BusinessInfo extends Controller
{
    public function startpage()
    {
      $data = array(
          'memberinfos'  => Members::all()
      );

      return view('business-info', $data);
    }
}
