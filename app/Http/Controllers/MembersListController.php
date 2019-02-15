<?php

namespace App\Http\Controllers;


class MembersListController extends Controller
{
    public function memberlistsearch()
    {
        $memberinfos = Members::all();
        return view('members', compact('memberinfos'));
    }
}
