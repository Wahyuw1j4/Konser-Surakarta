<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konser;
use Illuminate\Support\Facades\Auth;

class konserController extends Controller
{
    public function index($id)
    {
        $konser = Konser::find($id);
        return view('konser', compact('konser'));
    }

    public function showTambah()
    {
        return view('tambahKonser');
    }

    public function tambah(Request $request){

        
        $validatedData = $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'harga' => 'required',
            'poster' => 'image',
            'deskripsi' => 'required'
        ]);
        $originalFileName = $request->file('poster')->getClientOriginalName();
        $fileName = str_replace(' ', '-', $originalFileName);
        $validatedData['poster'] = $fileName;

        
        $path = $request->file('poster')->storeAs('images', $validatedData['poster']);

        $konser = Konser::create($validatedData);

        if ($konser) {
            return redirect()->route('index')->with('success', 'Konser Berhasil Ditambahkan');
        }
    }

    public function showEdit($id)
    {
        $konser = Konser::find($id);
        return view('editKonser', compact('konser'));
    }

    public function edit(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'harga' => 'required',
            'poster' => 'image',
            'deskripsi' => 'required'
        ]);
    
        $konser = Konser::find($request->id);
    
        if ($konser) {
            $konser->nama = $validatedData['nama'];
            $konser->tanggal = $validatedData['tanggal'];
            $konser->lokasi = $validatedData['lokasi'];
            $konser->harga = $validatedData['harga'];
            $konser->deskripsi = $validatedData['deskripsi'];
    
            if ($request->hasFile('poster')) {
                $originalFileName = $request->file('poster')->getClientOriginalName();
                $fileName = str_replace(' ', '-', $originalFileName);
                $validatedData['poster'] = $fileName;
                $path = $request->file('poster')->storeAs('images', $validatedData['poster']);
                $konser->poster = $validatedData['poster'];
            }
    
            $konser->save();
    
            return redirect()->route('konser', $request->id)->with('success', 'Konser Berhasil Diubah');
        }    
    }

    public function delete(Request $request)
    {
        $konser = Konser::find($request->id);
        if ($konser) {
            $konser->delete();
            return redirect()->route('index')->with('success', 'Konser Berhasil Dihapus');
        }
    }
}
