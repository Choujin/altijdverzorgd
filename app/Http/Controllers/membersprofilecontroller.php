<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class membersprofilecontroller extends Controller
{
    public funtion show(member $member){

      return view('profiles.show',['profilemember'=>$member]);
    }
}
