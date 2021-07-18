<?php

namespace App\Http\Controllers;

use App\nilai;
use App\matkul;
use App\mahasiswa;
use Illuminate\Http\Request;
Use Alert;

class nilaiController extends Controller
{
    public function index()
    {
        $nilai = nilai::with(['mahasiswa','matkul'])->get();        
        return view('nilai.index', compact('nilai'));
    }
    public function create()
    {
        $matkul = matkul::all();
        $mahasiswa = mahasiswa::all();
        return view('nilai.create', compact('matkul', 'mahasiswa'));
    } 
    public function store(Request $request)
    {
        nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('nilai');
    }

    public function edit(Request $request, $id)
    {
        $matkul = matkul::all();
        $mahasiswa = mahasiswa::all();
        $nilai = nilai::find($id);
        return view('nilai.edit', compact('nilai', 'matkul', 'mahasiswa'));
    }
    public function update(Request $request, $id)
    {
        $nilai = nilai::find($id);
        $nilai->update($request->all());
        toast('Data Berhasil Diedit','success');
        return redirect()->route('nilai');
               
    }
    public function destroy(Request $request, $id)
    {
        $nilai = nilai::find($id);
        $nilai->delete();
        toast('Data Berhasil Dihapus','success');
        return redirect()->route('nilai'); 
    }
}
