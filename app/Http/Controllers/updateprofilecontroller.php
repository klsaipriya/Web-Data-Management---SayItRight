<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class updateprofilecontroller extends Controller
{
    public function update()
    {
         $users = DB::select('select * from registers where username = ?', [session('user_name')]);
         return view('student-pages.updateprofile',['users'=>$users]);
    }
    public function updatenew()
    {
        $users = DB::select('select * from registers where username = ?', [session('user_name')]);
        return view('student-pages.editdetails',['users'=>$users]);
    }
    public function readaudio(){
        $users = DB::select('select * from registers where username = ?', [session('user_name')]);
        return view('student-pages.managerecordings',['users'=>$users]);
    }
    public function updatenewaudio(Request $req)
    {
        $file=$req->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $req->file->move('assets',$filename);
        $query=DB::update('update registers set filename = ? where username = ?',[$filename,session('user_name')]);
        if($query)
        {
            $users = DB::select('select * from registers where username = ?', [session('user_name')]);
            return view('student-pages.managerecordings',['users'=>$users]);
        }
    }
    public function save(Request $req)
    {
        $name=$req->fullname;
        $address=$req->address;
        $email=$req->email;
        $contact=$req->contact;
        $query=DB::update('update registers set fullname = ?,address = ?,email = ?,contact = ? where username = ?',[$name,$address,$email,$contact,session('user_name')]);
        if($query)
        {
            $users = DB::select('select * from registers where username = ?', [session('user_name')]);
            return view('student-pages.updateprofile',['users'=>$users]);
        }
        else{
            echo "Not updated";
        }
    }
    public function checkscores(){
        $users=DB::select('select * from student_gradings where username = ?',[session('user_name')]);
        return view('student-pages.checkscores',['users'=>$users]);
    }
}
