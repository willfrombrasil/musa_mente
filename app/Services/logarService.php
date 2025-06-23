<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class logarService
{
    public function login()
    {
        return view('admin.login');
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('admin');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logar($request)
    {
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            //dd($credentials);
            /*
            email: admin@mail.com / teste@teste.com
            senha: $10$Q34hi1/MncSh37hKs1u0QuwhAop/tzziuDedpkYcxW9v5Y/vNM0LO (senha123admin)
            */
            if (Auth::attempt($credentials)) {
                //dd('admin');
                $request->session()->regenerate();
                // return redirect()->route('admin');
                return redirect()->intended('admin');
            } else {
                //dd('error');
                Session::flash('error', 'E-mail e/ou senha não conferem.');
                return back()->withErrors([
                    'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
                ])->onlyInput('email');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
