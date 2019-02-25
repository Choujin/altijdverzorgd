<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ErrorMessageRequest;

use Mail;
use App\Member;
use App\Mail\ContactErrorMessageRequest;

class Errormessage extends Controller
{
    public function show()
    {
        $memberinfos = Member::all();
        return view('errormessage', compact('memberinfos'));
    }

    public function mail(ErrorMessageRequest $request)
    {

    	Mail::to('error@altijdverzorgd.nl')->send(new ContactErrorMessageRequest($request));

    	return redirect('formthx');
    }
}
