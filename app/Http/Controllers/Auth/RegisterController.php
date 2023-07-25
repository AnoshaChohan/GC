<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\unpaiduser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:nonpaiduser');
        $this->middleware('guest:user');

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
          //  'phone_number' => ['nullable', 'string'], // Make phone_number field optional

        ]);
    }

    /**
     * Show the subscriber registration form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function shownonpaiduserRegisterForm()
    {
        return view('auth.register', ['url' => 'nonpaiduser']);
    }

    /**
     * Create a new subscriber instance after a valid registration.
     *
     * @param  array  $data
     * @return mixed
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
          //  'phone_number'=>$data['phone_number'],

        ]);
    }

    /**
     * Create a new subscriber instance after a valid registration.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createnonpaiduser(Request $request)
    {
        $this->validator($request->all())->validate();

        nonpaiduser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          //  'phone_number'=>$request->phone_number,
        ]);

        return redirect()->intended('login/nonpaiduser');
    }
}
