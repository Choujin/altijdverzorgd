<?php

namespace App\Http\Controllers;

use App\Member;
class MembersListController extends Controller
{
    public function memberlistsearch()
    {
        $memberinfos = Member::all();
        return view('members', compact('memberinfos'));
    }
}
