<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function inicioPage()
    {
        return view('pagina/home');
    }

    public function loginPage()
    {
        return view('login/login');
    }

    public function registerPage()
    {
        return view('login/register');
    }


    public function login(Request $request)
    {
    }

    public function register(Request $request)
    {
        //Se tendrian que validar los  datos

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);

        return redirect(route('privada'));
    }

    public function logout(Request $request)
    {
    }
}
