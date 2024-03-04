<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci=$request->katakunci;
        $jumlahbaris=4;
        if(strlen($katakunci)){
            $data = barang::where('kode_barang','like',"%$katakunci%")
            ->orWhere("nama_barang","like","%$katakunci%")
            ->paginate($jumlahbaris);
        }else{


        $data = barang::orderBy('kode_barang','desc')->paginate(5);
        }
        return view('barang.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create')->with('success','Berhasil Menambahkan Data');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_barang'=>'required|numeric|unique:barang,kode_barang',
            'nama_barang'=>'required',
            'harga_beli'=>'required',
            'harga_jual'=>'required',
            'stok'=>'required',
        ],[
            'kode_barang.required'=>'kodebarang wajib diisi',
            'kode_barang.numeric'=>'kodebarang wajib angka',
            'kode_barang.unique'=>'kodebarang sudah ada',
            'nama_barang.required'=>'namabarang wajib diisi',
            'harga_beli.required'=>'hargabeli wajib diisi',
            'harga_jual.required'=>'hargajual wajib diisi',
            'stok.required'=>'stok wajib diisi',
        ]
        );


        $data = [
            'kode_barang'=> $request->kode_barang,
            'nama_barang'=> $request->nama_barang,
            'harga_beli'=> $request->harga_beli,
            'harga_jual'=> $request->harga_jual,
            'stok'=> $request->stok,
        ];
        barang::create($data);
        return redirect('/barang');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = barang::where('kode_barang', $id)->first();
        return view('barang.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'nama_barang'=>'required',
            'harga_beli'=>'required',
            'harga_jual'=>'required',
            'stok'=>'required',
        ],[

            'nama_barang.required'=>'namabarang wajib diisi',
            'harga_beli.required'=>'hargabeli wajib diisi',
            'harga_jual.required'=>'hargajual wajib diisi',
            'stok.required'=>'stok wajib diisi',
        ]
        );


        $data = [

            'nama_barang'=> $request->nama_barang,
            'harga_beli'=> $request->harga_beli,
            'harga_jual'=> $request->harga_jual,
            'stok'=> $request->stok,
        ];
        barang::where('kode_barang',$id)->update($data);
        return redirect()->to('barang')->with('success','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        barang::where('kode_barang',$id)->delete();
        return redirect()->to('barang')->with('success', 'Berhasil Menghapus Data');
    }
}
