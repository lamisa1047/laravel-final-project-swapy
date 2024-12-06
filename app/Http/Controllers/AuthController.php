<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth; // Corrected import
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        $credentials = $request->only("email", "password");

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }

        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =$request->password;

        if ($user->save()) {
            return redirect(route("login"))->with("success", "Account Created");
        }

        return redirect(route("register"))->with("error", "Failed to create an account");
    }
}
