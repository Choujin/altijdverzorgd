<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;

class MemberProfileController extends Controller
{

    protected $redirectTo = '/member/edit';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('member.auth:member');
    }

    /**
     * Show the Member dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('member.edit');
    }

    public function showChangePasswordForm()
    {
        return view('auth.changepassword');
    }

}
