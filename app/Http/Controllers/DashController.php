<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\customer;
class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = DB::table('customers')->get();
        return view('dtplg', compact('customer' ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = DB::table('customers')->get();
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('customers')->insert([
        'id' => $request->ID,
        'nama_pelanggan' => $request->nama,
        'TTL' => $request->TTL,
        'Alamat' => $request->Alamat,
        'Email' => $request->Email
    ]);
    
    return redirect('/dtplg');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $customer = DB::table('customers')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['customers' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('customers')->where('id',$request->id)->update([
        'nama_pelanggan' => $request->nama,
        'TTL' => $request->TTL,
        'Alamat' => $request->Alamat,
        'Email' => $request->Email
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/dtplg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('customers')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/dtplg');
    }
}
