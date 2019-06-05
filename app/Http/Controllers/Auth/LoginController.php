<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    //protected $redirectTo = '/home';

    protected function authenticated(Request $request, $user)
    {
        $role = $user->role;

        if ($role == 1) {
            return redirect()->intended('account/admin');
        }
        if ($role == 2) {
            return redirect()->intended('account/staff');
        }
        if ($role == 3) {
            return redirect()->intended('account/end_user');
        }

    }

   /* public function authenticate() {
        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            return "hello";
        }
    }*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:staff')->except('logout');
        $this->middleware('guest:end_user')->except('logout');
    }
}
