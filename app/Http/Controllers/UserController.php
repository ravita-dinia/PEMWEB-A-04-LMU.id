<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function login_process(Request $req){
    	$where = array(
    		'username' => $req->username,
    		'password' => md5($req->password)
    	);

    	$userdata = DB::table('users')->where($where)->first();
    	$count = DB::table('users')->where($where)->count();

    	if ($count == 0) {
    		return redirect('login');
    	}else{
    		Session::put('id_user', $userdata->id_user);
    		Session::put('name', $userdata->name);
    		Session::put('level', $userdata->level);

    		switch ($userdata->level) {
    			case 1:
    				return redirect('dash');
    				break;
    			case 2:
    				return redirect('plg');
    				break;
    			case 3:
    				return redirect('pmk');
    				break;
    		}
    	}
    }

    public function logout(){
    	Session::flush();
    	return redirect('template');
    }
}
