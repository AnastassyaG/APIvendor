<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function indexs()
    {
        $tampils = Vendor::orderBy('id','DESC')->get();
        return view('tampil',compact('tampils'));
    }
    public function index()
    {
        $tampils = Vendor::orderBy('id','DESC')->get();
        $response = [
            'message' => "Show data terbaru!",
            'data' => $tampils
        ];
        return response()->json($response,201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        //
        $vendor = new Vendor;
        $vendor->vendor = $request->vendor;
        $vendor->telepon = $request->telepon;
        $vendor->email = $request->email;
        $vendor->kota = $request->kota;
        $vendor->negara = $request->negara;
        $vendor->alamat = $request->alamat;
        $vendor->save();

        return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, vendor $vendor, $id)
    {
        //
        $vendor->vendor = $request->vendor;
        $vendor->telepon = $request->telepon;
        $vendor->email = $request->email;
        $vendor->kota = $request->kota;
        $vendor->negara = $request->negara;
        $vendor->alamat = $request->alamat;

        $vendor = Vendor::find($id);
        $vendor->vendor = $request->vendor;
        $vendor->telepon = $request->telepon;
        $vendor->email = $request->email;
        $vendor->kota = $request->kota;
        $vendor->negara = $request->negara;
        $vendor->alamat = $request->alamat;
        $vendor->save();
        return redirect()->route('vendor.index');
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

        return redirect()->route('vendor.index');
    }
    public function add(){
        return view ('add');
    }
    public function edit($id){
        $edit = Vendor::findorFail($id);
        return view('edit', compact('edit'));
    }
}
