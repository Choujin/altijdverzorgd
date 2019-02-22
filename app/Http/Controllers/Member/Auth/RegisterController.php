<?php

namespace App\Http\Controllers\Member\Auth;

use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new admins as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/member';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('member.guest:member');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'gender' => 'required|in:male,female,other',
            'birthday' => 'required|max:255',
            'email' => 'required|email|max:255|unique:members',
            'password' => 'required|min:6|confirmed',
            'telephone_number' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'postel_code' => 'required|max:255',
            'country' => 'required|max:255',
            'work_location' => 'required|max:255',
            'profession' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Member
     */
    protected function create(array $data)
    {
        return Member::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'telephone_number' => $data['telephone_number'],
            'address' => $data['address'],
            'city' => $data['city'],
            'postel_code' => $data['postel_code'],
            'country' => $data['country'],
            'work_location' => $data['work_location'],
            'profession' => $data['profession'],
            'ip_address' => request()->ip(),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('member.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('member');
    }

    // protected function registered(Request $request, $user) {
    //   $user->notify(new UserRegisteredNotification($user));
    // }

}
