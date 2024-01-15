<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kullanici;


class GirisController extends Controller
{
    public function index () {
        $kullanicis = Kullanici::paginate();
        return view('backend.pages.giris.index',compact('kullanicis'));
      }

      public function edit($id) {
        $kullanici = Kullanici::where('id', $id)->firstOrFail();
        return view('backend.pages.giris.edit', compact('kullanici'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',

        ]);

        $kullanici = Kullanici::find($id);

        if (!$kullanici) {
            return back()->withErrors(['message' => 'Kullanıcı bulunamadı.']);
        }

        $kullanici->update([
            'username' => $request->username,
            'password' => $request->password,

        ]);

        return redirect()->route('kullanici.index')->withSuccess('Kullanıcı başarıyla güncellendi.');
    }




    public function destroy($id)
    {
        $kullanici = Kullanici::find($id);

        if (!$kullanici) {
            return redirect()->back()->with('error', 'Kullanıcı bulunamadı.');
        }

        $kullanici->delete();

        return redirect()->back()->with('success', 'Kullanıcı başarıyla silindi.');
    }




}
