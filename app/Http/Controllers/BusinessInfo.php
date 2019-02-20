<?php
namespace App\Http\Controllers;

use App\Member;

class BusinessInfo extends Controller
{
    public function startpage()
    {
      $data = array(
          'memberinfos'  => Member::all()
      );

      return view('business-info', $data);
    }
}
