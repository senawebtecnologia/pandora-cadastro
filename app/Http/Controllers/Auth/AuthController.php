<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function pageLogin()
    {
        return view('auth.login');
    }

    public function Login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'password'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);

        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard.index')->with('success', 'Seja Bem Vindo');

        }else{
            return redirect()->back()->withErrors(['messageError' => 'Por favor insira os dados correctos']);

        }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('auth.pageLogin')->with('logout', 'Até mais '. Auth::user()->name . 'volte sempre');
    }
}
