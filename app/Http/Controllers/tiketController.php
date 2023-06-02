<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\konser;
use App\Models\tiket;

use Illuminate\Http\Request;

class tiketController extends Controller
{
    public function tiket($id)
    {   

        $konser = konser::find($id);
        $auth = Auth::user();
        return view('tambahTiket', compact('konser', 'auth'));
    }

    public function storeTiket(Request $request, $id){

        // dd(request()->all());
        $validatedData = $request->validate([
            'jumlah_tiket' => 'required',
        ]);


        if ($request->hasFile('bukti_pembayaran')) {
            $originalFileName = $request->file('bukti_pembayaran')->getClientOriginalName();
            $fileName = str_replace(' ', '-', $originalFileName);
            $validatedData['bukti_pembayaran'] = $fileName;
            $path = $request->file('bukti_pembayaran')->storeAs('images', $validatedData['bukti_pembayaran']);
        }

        $validatedData['username'] = Auth::user()->username;
        $validatedData['id_konser'] = $id;
        $validatedData['total_harga'] = $request->total_harga;

        $tiket = tiket::create($validatedData);

        return redirect()->route('konser', $id)->with('success', 'Tiket Berhasil Dibeli');
       
    }

    function listTiket(){
        $user = Auth::user();
        if($user->level_role == 0){
            $tikets = tiket::all();
            return view('listTiket', compact('tikets'));
        }
        else{
            $tikets = tiket::where('username', Auth::user()->username)->get();
            return view('listTiket', compact('tikets'));
        }
    }
}
