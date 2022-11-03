<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfessorLogincontroller extends Controller
{
    //
    public function info(Request $req)
    {
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $role='professor';
        $users = DB::select('select * from registers where username = ? AND password = ? AND role = ?', [$req->username,$req->password,$role]);
        $value=$req->session()->put('user_name',$req->username);
        if($users)
        {
            return view('professor-pages.professorpage');
        }
        else
        {
            return '<script>alert("Invalid username or password");</script>';
        }
    }
}
