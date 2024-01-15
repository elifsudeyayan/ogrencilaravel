<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Kullanici;

class GirisController extends Controller
{
    public function girisForm()
    {
        return view('frontend.pages.enter');
    }

    public function giris(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);


        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {

            return redirect()->route('anasayfa');
        }




        $kullanici = Kullanici::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);


        Auth::login($kullanici);


        return redirect()->route('anasayfa')->with('success', 'Giriş başarıyla gerçekleşti.');
    }
}
