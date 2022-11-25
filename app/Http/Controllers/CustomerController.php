<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function loginHandle(Request $request)
    {
        $user = User::where("email", $request->email)->first();
        if ($user != NULL) {
            if ($user->password == $request->password) {
                Session::put("user", $user);
                return redirect("home");
            } else {
                return back();
            }
        } else {
            return back();
        }
    }

    public function register()
    {
        return view('register');
    }

    public function registerHandle(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        Session::put("user", $user);
        return redirect("home");
    }

    public function logout()
    {
        Session::flush();
        return redirect("login");
    }
}
