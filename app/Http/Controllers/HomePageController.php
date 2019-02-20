<?php
namespace App\Http\Controllers;

use App\Member;
use App\DataInfo;

class HomePageController extends Controller
{
    public function startpage()
    {
        $data = array(
          'memberinfos'  => Member::all(),
          'datainfos' => DataInfo::all(),
      );

        return view('welcome', $data);
    }
    public function SearchForm()
    {

    }
}
