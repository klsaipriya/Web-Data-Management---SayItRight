<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class StudentregistrationController extends Controller
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

        $req->validate(['file' => 'required|mimes:csv,txt,xlx,xls,pdf,mp3|max:2048']);
        $RegModel = new Register;
        //$fileName = time().'_'.$req->file->getClientOriginalName();
        //$filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

        //$fileModel->name = time().'_'.$req->file->getClientOriginalName();
        $file=$req->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $req->file->move('assets',$filename);
        $uname=$req->username;
        $RegModel->username=$req->username;
        $RegModel->fullname=$req->fullname;
        $RegModel->email=$req->email;
        $RegModel->address=$req->address;
        $RegModel->contact=$req->contact;
        $RegModel->password=$req->password;
        $RegModel->confirmpass=$req->confirmpassword;
        $RegModel->filename =$filename;
        $RegModel->role='student';
        $status=$RegModel->save();
        $req->session()->put('username','$uname');
        if($status){
            return view('studentlogin')->with('success','You have registered successfully');
        }
        else{
            return back()->with('fail',"Something went wrong!!");
        }
    }
}
