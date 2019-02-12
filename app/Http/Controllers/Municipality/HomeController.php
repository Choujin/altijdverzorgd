<?php

namespace App\Http\Controllers\Municipality;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/municipality/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('municipality.auth:municipality');
    }

    /**
     * Show the Municipality dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('municipality.home');
    }

}