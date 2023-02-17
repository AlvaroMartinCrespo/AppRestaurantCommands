<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    //Vistas
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


    //Form
    public function login(Request $request)
    {
        //Se validarían los datos que entran aqui.
        $credenciales = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return redirect()->intended(route('inicio'));
        } else {
            return redirect(route('login'));
        }
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

        return redirect(route('inicio'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
