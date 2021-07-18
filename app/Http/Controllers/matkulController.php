<?php

namespace App\Http\Controllers;

use App\matkul;
use Illuminate\Http\Request;
Use Alert;

class matkulController extends Controller
{
    public function index()
    {
        $matkul = matkul::all();        
        return view('matkul.index', compact('matkul'));
    }
    public function create()
    {
        return view('matkul.create');
    }
    public function store(Request $request)
    {
        matkul::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('matkul');
    }
    public function edit(Request $request, $id)
    {
        $matkul = matkul::find($id);
        return view('matkul.edit', compact('matkul'));
    }
    public function update(Request $request, $id)
    {
        $matkul = matkul::find($id);
        $matkul->update($request->all());
        toast('Data Berhasil Diedit','success');
        return redirect()->route('matkul');
               
    }
    public function destroy(Request $request, $id)
    {
        $matkul = matkul::find($id);
        $matkul->delete();
        toast('Data Berhasil Dihapus','success');
        return redirect()->route('matkul'); 
    }

}
