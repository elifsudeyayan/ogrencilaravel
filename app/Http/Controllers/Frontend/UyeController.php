<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uye;
use Illuminate\Support\Facades\Hash;


class UyeController extends Controller
{
    public function showRegistrationForm()
    {
        return view('frontend.pages.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:uyeler,username',
            'email' => 'required|email|unique:uyeler,email',
            'password' => 'required|min:6|confirmed',
        ]);

        Uye::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('kayit')->withSuccess('Kayıt işlemi başarıyla tamamlandı. Giriş yapabilirsiniz.');
    }
}
