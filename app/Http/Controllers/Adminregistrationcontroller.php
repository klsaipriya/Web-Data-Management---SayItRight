<?php

namespace App\Http\Controllers;

use App\Models\Adminregister;
use Illuminate\Http\Request;
use App\Models\Register;

class Adminregistrationcontroller extends Controller
{
    //
    public function store(Request $req){

        $req->validate([
            'username'=>'required',
            'fullname'=>'required',
            'email'=>'required|email|unique:registers',
            'address'=>'required',
            'contact'=>'required',
            'password'=>'required|min:5|max:12'
        ]);
        
        $RegModel = new Adminregister();
        //$fileModel->name = time().'_'.$req->file->getClientOriginalName();
        $uname=$req->username;
        $RegModel->username=$req->username;
        $RegModel->fullname=$req->fullname;
        $RegModel->email=$req->email;
        $RegModel->address=$req->address;
        $RegModel->contact=$req->contact;
        $RegModel->password=$req->password;
        $RegModel->confirmpass=$req->confirmpassword;
        $RegModel->filename =' ';
        $RegModel->role='admin';
        $RegModel->save();
        //$req->session()->put('username','$uname');
        return view('adminlogin');
    }
}
