<?php

namespace App\Http\Controllers;

use App\Members;

class MembersListController extends Controller
{
    public function memberlistsearch()
    {
        $memberinfos = Members::all();
        return view('members', compact('memberinfos'));
    }
}
