<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\KlachtindienenRequest;

use Mail;
use App\Member;
use App\Mail\ContactKlachtindienenRequest;

class Klachtindienen extends Controller
{
    public function show()
    {
        $memberinfos = Member::all();
        return view('klachtindienen', compact('memberinfos'));
    }

    public function mail(KlachtindienenRequest $request)
    {

    	Mail::to('info@altijdverzorgd.nl')->send(new ContactKlachtindienenRequest($request));

    	return redirect('formthx');
    }
}
