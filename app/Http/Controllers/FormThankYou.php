<?php
namespace App\Http\Controllers;

use App\Member;

class FormThankYou extends Controller
{
    public function startpage()
    {
      $data = array(
          'memberinfos'  => Member::all()
      );

      return view('formthx', $data);
    }
}
