<?php

namespace App\Http\Controllers;

use App\Models\Adminannouncements;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Adminpagecontroller extends Controller
{
    //
    public function adminpage()
    {
        /*$role1='student';
        $studentcount = DB::select('select * from registers where role = ?',[$role1]);
        $role2='professor';
        $professorcount= DB::select('select * from registers where role = ?',[$role2]);
        $role3='advisor';
        $advisorcount= DB::select('select * from registers where role = ?',[$role3]);
        return view('admin-pages.adminpage',['studentcount'=>count($studentcount),'professorcount'=>count($professorcount),'advisorcount'=>count($advisorcount)]);*/
        $data = DB::table('registers')
       ->select(
        DB::raw('role as role'),
        DB::raw('count(*) as number'))
       ->groupBy('role')
       ->get();
     $array[] = ['role', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->role, $value->number];
     }
     return view('admin-pages.adminpage')->with('role', json_encode($array));
    }
    public function managecourse()
    {
        $users = DB::select('select * from professor_courses');
        return view('admin-pages.managecourse',['users'=>$users]);
    }
    public function manageprofessors()
    {
        $role='professor';
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('admin-pages.manageprofessors',['users'=>$users]);
    }
    public function managestudents()
    {
        $role='student';
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('admin-pages.managestudents',['users'=>$users]);
    }
    public function managestudentrecordings()
    {
        $role='student';
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('admin-pages.managestudentrecordings',['users'=>$users]);
    }
    public function makeannouncement(Request $req)
    {
        $announcement=new Adminannouncements();
        $announcement->username=session('user_name');
        $announcement->subject=$req->subject;
        $announcement->message=$req->message;
        return '<script>alert("Announcement is posted");</script>';
    }
    public function displaystudentdata(Request $req){
        $username=$req->username;
        $fullname=$req->fullname;
        $email=$req->email;
        $contact=$req->contact;
        $address=$req->address;
        return view('admin-pages.editstudentdata',['username'=>$username,'fullname'=>$fullname,'email'=>$email,'contact'=>$contact,'address'=>$address]);

    }
    public function displayprofessordata(Request $req){
        $username=$req->username;
        $fullname=$req->fullname;
        $email=$req->email;
        $contact=$req->contact;
        
        return view('admin-pages.editprofessordata',['username'=>$username,'fullname'=>$fullname,'email'=>$email,'contact'=>$contact]);

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
        return view('admin-pages.managestudents',['users'=>$users]);

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
        return view('admin-pages.manageprofessors',['users'=>$users]);

    }
    public function deletestudentdata(Request $req)
    {
        $role='student';
        $username=$req->username;
        $query=DB::select('delete from registers where username = ? AND role = ?',[$username,$role]);
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('admin-pages.managestudents',['users'=>$users]);
    }
    public function deleteprofessordata(Request $req)
    {
        $role='professor';
        $username=$req->username;
        $query=DB::select('delete from registers where username = ? AND role = ?',[$username,$role]);
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('admin-pages.managestudents',['users'=>$users]);
    }
    public function deleterecordings(Request $req){
        $uname=$req->username;
        $role='student';
        $filedata=' ';
        $query = DB::select('update registers set filename = ? where username = ? AND role = ?',[$filedata,$uname,$role]);
        $users = DB::select('select * from registers where role = ?',[$role]);
        return view('admin-pages.managestudentrecordings',['users'=>$users]);

    }
    public function deletecoursedata(Request $req)
    {
        $username=$req->username;
        $cid=$req->cid;
        $query=DB::select('delete from professor_courses where username = ? AND cid = ?',[$username,$cid]);
        $users = DB::select('select * from professor_courses');
        return view('advisor-pages.managecourse',['users'=>$users]);
    }
    public function displaycoursedata(Request $req){
        $username=$req->username;
        $cid=$req->cid;
        $subject=$req->subject;
        $section=$req->section;
        $days=$req->days;
        $fromtime=$req->fromtime;
        $totime=$req->totime;
        return view('admin-pages.editcoursedata',['username'=>$username,'cid'=>$cid,'subject'=>$subject,'section'=>$section,'days'=>$days,'fromtime'=>$fromtime,'totime'=>$totime]);

    }
    public function updatecoursedata(Request $req)
    {
        $username=$req->username;
        $cid=$req->cid;
        $subject=$req->subject;
        $section=$req->section;
        $days=$req->days;
        $query=DB::update('update professor_courses set cid = ?, subject = ?, section = ?, days = ? where username = ?',[$cid,$subject,$section,$days,$username]);
        $users = DB::select('select * from professor_courses');
        return view('admin-pages.managecourse',['users'=>$users]);
    }
}
