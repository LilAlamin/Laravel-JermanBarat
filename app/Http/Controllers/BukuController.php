<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class BukuController extends Controller
{
    //GET BUKU
    public function buku(){
        $batas =5;
        $data_buku = Buku::paginate($batas);
        $no = $batas *($data_buku->currentPage()-1);
        return view("buku.index", compact('data_buku','no'));
    }

    //Create Buku
    public function create(){
        return view('buku.create');
    }

    //Store Buku
    public function store(Request $request){
        $buku = new Buku();

        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect()->route('buku.index')->with('pesan','Data Buku Berhasil Disimpan sir');
    }

    //Delete Buku
    public function destroy($id){
        $buku = Buku::find($id);
        $buku ->delete();
        return redirect()->route('buku.index');
    }

    //Edit Buku
    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.edit',['buku'=>$buku]);
    }
    public function update(Request $request,$id){
        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga; $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
    return redirect()->route('buku.index');
    }
}
