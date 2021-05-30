<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function index()
    {
        //
        return Vendor::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        //
        $barang = new Vendor;
        $barang->id = $request->id;
        $barang->nama_vendor = $request->nama_vendor;
        $barang->tipe_produk = $request->tipe_produk;
        $barang->alamat = $request->alamat;
        $barang->save();

        return "Data Berhasil Masuk";

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
        //
        $id = $request->id;
        $nama_vendor= $request->nama_vendor;
        $tipe_produk = $request->tipe_produk;
        $alamat = $request->alamat;

        $barang = Vendor::find($id);
        $barang->id = $id;
        $barang->nama_vendor = $nama_vendor;
        $barang->tipe_produk = $tipe_produk;
        $barang->alamat = $alamat;
        $barang->save();

        return "Data Berhasil di Update";
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $barang = Vendor::find($id);
        $barang->delete();

        return "Data Berhasil di Hapus";
    }
}
