<?php
// namespace App\Http\Controllers;

// use App\Members;
// use Illuminate\Http\Request;

// class errormessage extends Controller
// {
//     public function startpage()
//     {
//       $data = array(
//           'memberinfos'  => Members::all()
//       );

//       return view('errormessage', $data);
//     }

// }



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ErrorMessageRequest;

use Mail;
use App\Members;
use App\Mail\ContactErrorMessageRequest;

class Errormessage extends Controller
{
    public function show()
    {
        $memberinfos = Members::all();
        return view('errormessage', compact('memberinfos'));
    }

    public function mail(ErrorMessageRequest $request)
    {

    	Mail::to('error@altijdverzorgd.nl')->send(new ContactErrorMessageRequest($request));

    	return redirect()->back()->with('status', 'Your message has been received');
    }
}
