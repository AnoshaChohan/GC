<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\unpaiduser;
class LoginController extends Controller
{
/*
|--------------------------------------------------------------------------
| Login Controller
|--------------------------------------------------------------------------
|
| This controller handles authenticating users for the application and
| redirecting them to your home screen. The controller uses a trait
| to conveniently provide its functionality to your applications.
|
*/
use AuthenticatesUsers;
/**
* Where to redirect users after login.
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
$this->middleware('guest')->except('logout');
$this->middleware('guest:admin')->except('logout');
}

public function showNonpaiduserLoginForm()
{
    return view('auth.login', ['url' => 'Nonpaiduser']);
}

public function NonpaiduserLogin(Request $request)
{
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    if (Auth::guard('Nonpaiduser')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
        return redirect()->intended('/Nonpaiduser');
    }

    return back()->withInput($request->only('email', 'remember'));
}
public function authenticateUser(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        // Authentication successful, redirect to desired location
        return redirect()->intended('/User');
    }

    // Authentication failed, redirect back with errors
    return redirect()->back()->withErrors([
        'email' => 'Invalid credentials',
    ]);
}

    }