<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ErrorMessageRequest;

use Mail;
use App\Member;
use App\Mail\ContactErrorMessageRequest;

class Klachtindienen extends Controller
{
    public function show()
    {
        $memberinfos = Member::all();
        return view('klachtindienen', compact('memberinfos'));
    }

    public function mail(ErrorMessageRequest $request)
    {

    	Mail::to('info@altijdverzorgd.nl')->send(new ContactErrorMessageRequest($request));

    	return redirect()->back()->with('status', 'Your message has been received');
    }
}
