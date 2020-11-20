<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PasienController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pasien =\App\pasien::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_pasien = \App\pasien::all();
        }
        return view('pasien.index',['data_pasien' => $data_pasien]);
    }
    public function create(Request $request)
    {
        $user = new \App\User;
        $user->role ='pasien';
        $user->name = $request->nama;
        $user->username = $request->username;
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['kode_user' => $users->id_users]);
        $pasien = \App\pasien::create($request->all());
        return redirect('/pasien')->with('sukses','Data Berhasil diinput');
    }
    public function edit($id)
    {
        $pasien = \App\Pasien::find($id);
        return view('pasien/edit',['pasien' => $pasien]);
    }
    public function update(Request $request, $id)
    {
        $pasien = \App\Pasien::find($id);
        $pasien->update($request->all());
        return redirect('/pasien')->with('sukses','Data Berhasil diupdate');
    }
    public function delete($id)
    {
        $pasien = \App\Pasien::find($id);
        $pasien->delete($pasien);
        return redirect('/pasien')->with('sukses','Data Berhasil dihapus');
    }
    public function profile($id)
    {
        $pasien =\App\Pasien::find($id);
        return view('pasien.profile',['pasien' => $pasien]);
    }
}
