<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{

    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa',['mahasiswa'=> $mahasiswa]);
    }
    
    public function tambahdata()
    {
        return view('from_data');
    }


    public function simpan(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'kota' => $request->kota
        ]);
        return redirect('/home');
    }

    public function edit(string $id)
    {
        $mahasiswa=DB::table('mahasiswa')->where('id',$id)->get();
        return view('edit',['mahasiswa'=>$mahasiswa]);
    }

    public function update(request $request)
    {
        DB::table('mahasiswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'umur' =>$request->umur,
            'kota' => $request->kota,
        ]);
        return redirect('/mahasiswa');
    }

    
    public function destroy($id)
    {
        DB::table('mahasiswa')->where('id' ,$id)->delete();
        return redirect(('/home'));
    }
}
