<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;


class PageController extends Controller
{
    public function hakkında() {
        $about = About::where('id',1)->first();
        return view('frontend.pages.about',compact('about'));

    }

    public function kayıt() {
        return view('frontend.pages.register');

    }

    public function giris() {
        return view('frontend.pages.enter');

    }

    public function iletisim() {
        return view('frontend.pages.contact');

    }
}
