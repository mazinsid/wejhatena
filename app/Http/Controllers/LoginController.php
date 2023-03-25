<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\RegisterVerification;
use App\Models\Ads;
use App\Models\Category;
use App\Models\City;
use App\Models\CityList;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use GuzzleHttp\Client;

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
        // if (filter_var($request->get('username'), FILTER_VALIDATE_EMAIL)) {
        $verify = array('email' => $request->email, 'password' => $request->password);
        // } else {
        //     $verify = array('phone_no' => $request->username, 'password' => $request->password);
        // }

        if (Auth::attempt($verify)) {
            if (Auth::user()->hasRole('admin|staff')) {
                Auth::logout();
                return back()->withErrors([
                    'email' => __('lang.credentials_not_user'),
                ])->onlyInput(['email']);
            }

            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => __('lang.credentials_not_match'),
        ])->onlyInput(['email']);
    }

    public function changepassword(Request $request)
    {
        // if (filter_var($request->get('username'), FILTER_VALIDATE_EMAIL)) {
        $verify = array('email' => $request->email, 'password' => $request->password);
        $user = User::where('email', $request->email)->get()[0];
        $user->password = Hash::make($request->new_password);
        $user->update();

        $request->session()->regenerate();
        return redirect()->intended('home');
        // } else {
        //     $verify = array('phone_no' => $request->email, 'password' => $request->password);
        //     $user = User::where('phone_no', $request->email)->get()[0];
        //     $user->password = Hash::make($request->new_password);
        //     $user->update();

        //     $request->session()->regenerate();
        //     return redirect()->intended('home');
        // }
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if (filter_var($request->mobile, FILTER_VALIDATE_EMAIL)) {
            $verify = array('email' => $request->mobile, 'password' => $request->password);
            $user = User::where('email', $request->mobile)->first();
        } else {
            $verify = array('phone_no' => $request->mobile, 'password' => $request->password);
            $user = User::where('phone_no', $request->mobile)->first();
        }
        $user->password = Hash::make($request->password);
        $user->update();
        return redirect()->route('login')->with("message", __("lang.password_reset_successful"));
    }

    // public function setRegisterVerification(Request $request)
    // {
    //     $code = rand(1111, 9999);
    //     $message = __("lang.otp_sent");
    //     if ($request->type == "mobile") {
    //         $user = User::where("phone_no", $request->mobile)->first();
    //         if ($user)  return json_encode(array("success" => false,  "message" => __("validation.unique", ['attribute' => __("lang.mobile_number")])));
    //         $ch = curl_init();
    //         curl_setopt($ch, CURLOPT_URL, "https://www.msegat.com/gw/sendsms.php");
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    //         curl_setopt($ch, CURLOPT_HEADER, TRUE);
    //         curl_setopt($ch, CURLOPT_POST, TRUE);
    //         $fields = <<<EOT
    //         {
    //             "userName" :"mazin_sid",
    //             "numbers" :  $request->email,
    //             "userSender" : "laamah",
    //             "apiKey" : "48ebaab3ed85e59f27989a0e0418e5b1",
    //             "msg" : "Your laamah OTP is $code",
    //             "msgEncoding" :"UTF-8"
    //         }
    //         EOT;
    //         curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    //         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //             "Content-Type: application/json"
    //         ));
    //         $response = curl_exec($ch);
    //         $info = curl_getinfo($ch);
    //         curl_close($ch);
    //     }

    //     if ($request->type == "email") {
    //         $email = new RegisterVerification();
    //         $email->code = $code;
    //         $email->title = __("lang.registration_verification");
    //         Mail::to($request->email)->send($email);
    //     }

    //     return json_encode(array("success" => true, "code" => $code, "message" => $message));
    // }

    public function signin()
    {
        // $categories = Category::with("subcategories")->where('status', 1)->orderBy('order', 'ASC')->get();
        // $cities = City::orderBy('city_en', 'ASC')->get();
        // $is_searchable = false;
        return view("auth.login");
    }

    public function register()
    {
        // $categories = Category::with("subcategories")->where('status', 1)->orderBy('order', 'ASC')->get();
        // $cities = City::orderBy('city_en', 'ASC')->get();
        // $is_searchable = false;
        return view("auth.register");
    }

    public function registerEmail()
    {
        return redirect()->route("register");
        $categories = Category::with("subcategories")->where('status', 1)->orderBy('order', 'ASC')->get();
        $cities = City::orderBy('city_en', 'ASC')->get();
        $is_searchable = false;
        return view("auth.register-email", compact('categories', 'cities', 'is_searchable'));
    }

    public function passwordReset(Request $request)
    {
        $categories = Category::with("subcategories")->where('status', 1)->orderBy('order', 'ASC')->get();
        $cities = City::orderBy('city_en', 'ASC')->get();
        $is_searchable = false;
        return view("auth.reset-password", compact('categories', 'cities', 'is_searchable', 'request'));
    }

    // public function setPasswordResetVerification(Request $request)
    // {
    //     $type = "mobile";
    //     $field = "phone_no";
    //     $user = User::where($field, $request->mobile)->first();
    //     if (!$user) return json_encode(array("success" => false,  "message" => __("lang.user_not_found")));

    //     $code = rand(1111, 9999);
    //     $message = __("lang.otp_sent");
    //     if ($type == "mobile") {
    //         $ch = curl_init();
    //         curl_setopt($ch, CURLOPT_URL, "https://www.msegat.com/gw/sendsms.php");
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    //         curl_setopt($ch, CURLOPT_HEADER, TRUE);
    //         curl_setopt($ch, CURLOPT_POST, TRUE);
    //         $fields = <<<EOT
    //         {
    //             "userName" :"mazin_sid",
    //             "numbers" :  $request->username,
    //             "userSender" : "laamah",
    //             "apiKey" : "48ebaab3ed85e59f27989a0e0418e5b1",
    //             "msg" : "Your laamah OTP is $code",
    //             "msgEncoding" :"UTF-8"
    //         }
    //         EOT;
    //         curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    //         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //             "Content-Type: application/json"
    //         ));
    //         $response = curl_exec($ch);
    //         $info = curl_getinfo($ch);
    //         curl_close($ch);
    //     }

    //     if ($type == "email") {
    //         $email = new RegisterVerification();
    //         $email->code = $code;
    //         $email->title = __("lang.password_reset_verification");
    //         Mail::to($request->username)->send($email);
    //     }

    //     return json_encode(array("success" => true, "code" => $code, "message" => $message));
    // }
}
