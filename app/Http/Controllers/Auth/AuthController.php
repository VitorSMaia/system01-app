<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check() == true) {
            return redirect()->route('adm.home.index');
        }
        return view('authjv.login');
    }

    public function login(Request $request)
    {
        Auth::attempt([
            'email' => $request->login,
            'password' => $request->password,
        ]);
        if (Auth::check() == true) {
            return redirect()->route('adm.home.index');
        } else {
            return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem']);
        }
    }

    public function logout()
    {
        Auth::logout();
        if (Auth::check() == false) {
            return redirect()->route('welcome');
        } else {
            dd('Não Deslogou');
        }
    }

}
