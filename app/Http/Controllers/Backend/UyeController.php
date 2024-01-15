<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uye;

class UyeController extends Controller
{
    public function index () {
        $uyes = Uye::paginate();
        return view('backend.pages.uye.index',compact('uyes'));
      }

      public function edit($id) {
        $uye = Uye::where('id', $id)->firstOrFail();
        return view('backend.pages.uye.edit', compact('uye'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',

        ]);

        $uye = Uye::find($id);

        if (!$uye) {
            return back()->withErrors(['message' => 'Kullanıcı bulunamadı.']);
        }

        $uye->update([
            'username' => $request->username,
            'password' => $request->password,

        ]);

        return redirect()->route('uye.index')->withSuccess('Kullanıcı başarıyla güncellendi.');
    }




    public function destroy($id)
    {
        $uye = Uye::find($id);

        if (!$uye) {
            return redirect()->back()->with('error', 'Kullanıcı bulunamadı.');
        }

        $uye->delete();

        return redirect()->back()->with('success', 'Kullanıcı başarıyla silindi.');
    }




}


