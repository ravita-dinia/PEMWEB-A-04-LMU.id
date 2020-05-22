<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\musician;
class MusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $musician = DB::table('musicians')->get();
        return view('dtpmk', compact('musician' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $musician = DB::table('musicians')->get();
        return view('createpmk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          DB::table('musicians')->insert([
        'id' => $request->ID,
        'nama_pemusik' => $request->nama,
        'TTL' => $request->TTL,
        'Alamat' => $request->Alamat,
        'Email' => $request->Email
    ]);
    return redirect('/dtpmk');
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
        $musician  = DB::table('musicians')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editpmk',['musicians' => $musician]);
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
        DB::table('musicians')->where('id',$request->id)->update([
        'nama_pemusik' => $request->nama,
        'TTL' => $request->TTL,
        'Alamat' => $request->Alamat,
        'Email' => $request->Email
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/dtpmk');
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
        DB::table('musicians')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/dtpmk');
    }
}
