<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\transaction;

class TransaksiController extends Controller
{
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
    {
		$transaction = DB::table('transactions')->get();
		return view('transaksi', compact('transaction' ));
	}
}
