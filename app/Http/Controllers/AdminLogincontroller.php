<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminLogincontroller extends Controller
{
    //
    public function info(Request $req)
    {
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $role='admin';
        $users = DB::select('select * from adminregisters where username = ? AND password = ? AND role = ?', [$req->username,$req->password,$role]);
        $value=$req->session()->put('user_name',$req->username);
        if($users)
        {
            return redirect('/adminpage');
        }
        else
        {
            return '<script>alert("Invalid username or password");</script>';
        }
    }
}
