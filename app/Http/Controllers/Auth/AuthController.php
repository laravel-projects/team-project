<?php

namespace TeamProject\Http\Controllers\Auth;

use TeamProject\User;
use Validator;
use TeamProject\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname'  => 'required|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create($data)
    {
        $data = (object) $data;
        $gender     = ($data->gender == 1)? 1:0;
        $username   = str_slug($data->firstname.$data->lastname);
        $i = 1;
        while (count(User::where('username',$username)->get()) > 0) {
            $username = $username.$i;
            $i++;
        }  
        $birthday = $data->year.'-'.$data->month.'-'.$data->day;
        dd($data);
        return User::create([
            'firstname' => $data->firstname,
            'lastname'  => $data->lastname,
            'username'  => $username,
            'gender'    => $gender,
            'birthday'  => $birthday,
            'pay'       => $data->country,
            'email'     => $data->email,
            'password'  => bcrypt($data->password),
            'created_at'=> date("Y-m-d H:i:s")
        ]);
    }
}
