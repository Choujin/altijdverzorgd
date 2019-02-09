<?php
namespace App\Http\Controllers;

use App\Members;
use App\DataInfo;
class DataInfoController extends Controller
{
    public function startpage()
    {
      $data = array(
          'memberinfos'  => Members::all(),
          'datainfos' => DataInfo::all(),
      );

      return view('welcome', $data);
    }
}
