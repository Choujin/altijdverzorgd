<?php
namespace App\Http\Controllers;

use App\Member;

class AlgemeneVoorwaarden extends Controller
{
    public function startpage()
    {
      $data = array(
          'memberinfos'  => Member::all()
      );

      return view('algemene-voorwaarden', $data);
    }
}
