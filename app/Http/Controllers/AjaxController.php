<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Iletisim;
use Illuminate\Support\Str;
#use App\Http\Controllers\Contact;




class AjaxController extends Controller
{
    public function iletisimForm()
{
    return view('frontend.pages.contact');
}
    public function iletisimkaydet(Request $request)
    {

        $newdata = [
            'ad_soyad' => Str::title($request->ad_soyad),
            'email' => $request->email,
            'telefon' => Str::title($request->telefon),
            'mesaj' => Str::title($request->mesaj),
        ];
        $iletisim = Iletisim::create([
            "ad_soyad" => Str::title($request->ad_soyad),
            "email" => $request->email,
            "telefon" => Str::title($request->telefon),
            "mesaj" => Str::title($request->mesaj),
        ]);





        $iletisim = Iletisim::create($newdata);


        return back()->withSuccess('Gönderildi');

    }
}
