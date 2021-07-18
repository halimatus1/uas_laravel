<?php

namespace App\Http\Controllers;

use App\user;
use App\mahasiswa;
use Illuminate\Http\Request;
Use Alert;

class mahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::with(['user'])->get();        
        return view('mahasiswa.index', compact('mahasiswa'));
    }    
    public function create()
    {
        $user = User::all();
        return view('mahasiswa.create', compact('user'));
    }
    public function store(Request $request)
    {
        mahasiswa::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('mahasiswa');
    }
    public function edit(Request $request, $id)
    {
        $user = User::all();
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa', 'user'));
    }
    public function update(Request $request, $id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Data Berhasil Diedit','success');
        return redirect()->route('mahasiswa');
               
    }
    public function destroy(Request $request, $id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Data Berhasil Dihapus','success');
        return redirect()->route('mahasiswa'); 
    }
   
}
