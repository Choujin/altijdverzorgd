<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PersoonaanbevelenRequest;

use Mail;
use App\Member;
use App\Mail\ContactPersoonaanbevelenRequest;

class Persoonaanbevelen extends Controller
{
    public function show()
    {
        $memberinfos = Member::all();
        return view('persoonaanbevelen', compact('memberinfos'));
    }

    public function mail(PersoonaanbevelenRequest $request)
    {

    	Mail::to('info@altijdverzorgd.nl')->send(new ContactPersoonaanbevelenRequest($request));

    	return redirect()->back()->with('status', 'Your message has been received');
    }
}
