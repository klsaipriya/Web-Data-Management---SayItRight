<?php

namespace App\Http\Controllers;

use App\Models\Advisorannouncements;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Advisorpagecontroller extends Controller
{
    //
    public function managecourse()
    {
        $users = DB::select('select * from professor_courses');
        return view('advisor-pages.managecourse',['users'=>$users]);
    }
    public function manageprofessors()
    {
        $role='professor';
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('advisor-pages.manageprofessors',['users'=>$users]);
    }
    public function managestudents()
    {
        $role='student';
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('advisor-pages.managestudents',['users'=>$users]);
    }
    public function managestudentrecordings()
    {
        $role='student';
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('advisor-pages.managestudentrecordings',['users'=>$users]);
    }
    public function makeannouncement(Request $req)
    {
        $announcement=new Advisorannouncements();
        $announcement->username=session('user_name');
        $announcement->subject=$req->subject;
        $announcement->message=$req->message;
        return '<script>alert("Announcement is posted");</script>';
    }
    public function deleterecordings(Request $req){
        $uname=$req->username;
        $role='student';
        $filedata=' ';
        $query = DB::select('update registers set filename = ? where username = ? AND role = ?',[$filedata,$uname,$role]);
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('advisor-pages.managestudentrecordings',['users'=>$users]);

    }
    public function displaystudentdata(Request $req){
        $username=$req->username;
        $fullname=$req->fullname;
        $email=$req->email;
        $contact=$req->contact;
        $address=$req->address;
        return view('advisor-pages.editstudentdata',['username'=>$username,'fullname'=>$fullname,'email'=>$email,'contact'=>$contact,'address'=>$address]);

    }
    public function displayprofessordata(Request $req){
        $username=$req->username;
        $fullname=$req->fullname;
        $email=$req->email;
        $contact=$req->contact;
        
        return view('advisor-pages.editprofessordata',['username'=>$username,'fullname'=>$fullname,'email'=>$email,'contact'=>$contact]);

    }
    
    public function updatestudentdata(Request $req)
    {
        $username=$req->username;
        $name=$req->fullname;
        $address=$req->address;
        $email=$req->email;
        $contact=$req->contact;
        $query=DB::update('update registers set fullname = ?,address = ?,email = ?,contact = ? where username = ?',[$name,$address,$email,$contact,$username]);
        $role='student';
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('advisor-pages.managestudents',['users'=>$users]);

    }

    public function updateprofessordata(Request $req)
    {
        $username=$req->username;
        $name=$req->fullname;
        $email=$req->email;
        $contact=$req->contact;
        $query=DB::update('update registers set fullname = ?,email = ?,contact = ? where username = ?',[$name,$email,$contact,$username]);
        $role='professor';
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('advisor-pages.manageprofessors',['users'=>$users]);

    }
    public function deletecoursedata(Request $req)
    {
        $username=$req->username;
        $cid=$req->cid;
        $query=DB::select('delete from professor_courses where username = ? AND cid = ?',[$username,$cid]);
        $users = DB::select('select * from professor_courses');
        return view('advisor-pages.managecourse',['users'=>$users]);
    }

}
