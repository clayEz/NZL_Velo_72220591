<?php

namespace App\Http\Controllers;

use App\Bicycle;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "Home"]);
    }

    public function sepeda()
    {
        $sepeda = Bicycle::orderBy('id', 'desc')->get();
        return view("sepeda", ["key" => "sepeda", "mv" => $sepeda]);
    }

    public function addsepeda()
    {
        return view("formadd", ["key" => "sepeda"]);
    }

    public function savesepeda(Request $request)
    {
        $file_name = time().'-'.$request->file('poster')->getClientOriginalName();
        $path = $request->file('poster')->storeAs('poster', $file_name, 'public');

        Bicycle::create([
            'nama' => $request->nama,
            'merek' => $request->merek,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'warna' => $request->warna,
            'tahun' => $request->tahun,
            'poster' => $path
        ]);

        return redirect("sepeda")->with('alert', 'Data Berhasil Disimpan');
    }

    public function editsepeda($id)
    {
        $sepeda = Bicycle::find($id);
        return view("formedit", ["key" => "sepeda", "mv" => $sepeda]);
    }

    public function updatesepeda($id, Request $request)
    {
        $sepeda = Bicycle::find($id);

        $sepeda->nama = $request->nama;
        $sepeda->merek = $request->merek;
        $sepeda->jenis = $request->jenis;
        $sepeda->harga = $request->harga;
        $sepeda->warna = $request->warna;
        $sepeda->tahun = $request->tahun;
        $sepeda->poster = $request->poster;

        if($request->poster)
        {
            if($sepeda->poster)
            {
                Storage::disk('public')->delete($sepeda->poster);
            }

            $file_name = time().'-'.$request->file('poster')->getClientOriginalName();
            $path = $request->file('poster')->storeAs('poster', $file_name, 'public');
            $sepeda->poster = $path;
        }
        $sepeda->save();
        return redirect("/sepeda")->with('alert', 'Data Berhasil di Ubah');
    }

    public function deletesepeda($id)
    {
        $sepeda = Bicycle::find($id);

        if ($sepeda->poster)
        {
            Storage::disk('public')->delete($sepeda->poster);
        }

        $sepeda->delete();
        return redirect("/sepeda")->with('alert', 'Data Berhasil di Hapus');
    }

    public function login()
    {
        return view("login");
    }

    public function edituser()
    {
        return view("edituser", ["key" => ""]);
    }

    public function updateuser(Request $request)
    {
        if($request->password_baru == $request->konfirmasi_password)
        {
            $user = Auth::user();

            $user->password = bcrypt($request->password_baru);

            $user->save();

            return redirect("/user")->with("info", "Password Berhasil di Ubah");
        }
        else
        {
            return redirect("/user")->with("info", "Password Gagal di Ubah");
        }
    }
}
