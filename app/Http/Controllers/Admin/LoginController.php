<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $verify = array('email' => $request->email, 'password' => $request->password);


        if (Auth::attempt($verify)) {
            if (Auth::user()->hasRole('user')) {
                Auth::logout();
                return back()->withErrors([
                    'email' => __('lang.credentials_not_user'),
                ])->onlyInput(['email']);
            }

            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => __('lang.credentials_not_match'),
        ])->onlyInput(['email']);
    }

    public function language($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
