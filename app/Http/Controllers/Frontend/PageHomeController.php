<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Iletisim;
use App\Models\About;
use App\Models\Kullanici;


class PageHomeController extends Controller
{
    public function anasayfa() {
        $about = About::first();
        return view('frontend.pages.index',compact('about'));
    }



}
