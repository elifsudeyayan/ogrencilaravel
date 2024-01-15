<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\optional;


class AboutController extends Controller
{
    public function index(){

        $about = About::where('id',1)->first();
   return view('backend.pages.about.index' ,compact('about'));
    }
    public function update(Request $request, $id = 1){
        if($request->hasFile('title','content')) {
            $title=$request->$title;
            $content=$request->$content;

        }


        About::where('id', $id)->update([
            'title' => $request->title ?? '',
            'content' => $request->content,
        ]);


            return back()->withSuccess('Başarıyla Güncellendi');
   }


}
