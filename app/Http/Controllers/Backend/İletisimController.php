<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Iletisim;

class İletisimController extends Controller
{


    public function index () {
        $iletisims = Iletisim::paginate(20);
        return view('backend.pages.iletisim.index',compact('iletisims'));
      }

      public function edit($id) {
        $iletisim = Iletisim::where('id',$id)->firstOrFail();
        return view('backend.pages.iletisim.edit',compact('iletisim'));
      }

      public function update(Request $request, $id)
{
    $request->validate([

    ]);



    Iletisim::where('id', $id)->update([

    ]);

    return back()->withSuccess('Başarıyla Güncellendi');
}



public function destroy($id)
{
    $iletisim = Iletisim::find($id);

    if (!$iletisim) {
        return redirect()->back()->with('error', 'Kullanıcı bulunamadı.');
    }

    $iletisim->delete();

    return redirect()->back()->with('success', 'Kullanıcı başarıyla silindi.');
}



}

