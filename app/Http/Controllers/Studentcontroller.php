<?php

namespace App\Http\Controllers;

use App\Models\StudentGrading;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    //
    public function managestudents()
    {
        $users=DB::select('select DISTINCT registers.username,registers.fullname,registers.contact,registers.email,registers.address from student_course_enrollments,registers where registers.username=student_course_enrollments.username AND student_course_enrollments.profid= ? ',[session('user_name')]);
        return view('professor-pages.managestudents',['users'=>$users]);
    }
    public function managestudentrecordings()
    {
        $users=DB::select('select DISTINCT registers.username,registers.fullname,registers.contact,registers.email,registers.address,registers.filename from student_course_enrollments,registers where registers.username=student_course_enrollments.username AND student_course_enrollments.profid= ? ',[session('user_name')]);
        return view('professor-pages.managestudentrecordings',['users'=>$users]);
    }
    public function managegrading()
    {
        $users=DB::select('select * from homework_submissions where profid = ?',[session('user_name')]);
        return view('professor-pages.managegrading',['users'=>$users]);
    }
    public function evaluate(Request $req)
    {
        $username=$req->username;
        $subject=$req->subject;
        $comments=$req->comments;
        $users=DB::select('select * from student_gradings where profid = ? AND username = ? AND subject = ? AND comments = ?',[session('user_name'),$username,$subject,$comments]);
        return view('professor-pages.evaluate',['username'=>$username,'subject'=>$subject,'comments'=>$comments,'users'=>$users]);
    }
    public function postgrades(Request $req)
    {
        $grading=new StudentGrading();
        $grading->profid=session('user_name');
        $grading->username=$req->usname;
        $grading->subject=$req->subject;
        $grading->comments=$req->comments;
        $grading->grade=$req->grade;
        $grading->save();
        $users=DB::select('select * from homework_submissions where profid = ?',[session('user_name')]);
        return view('professor-pages.managegrading',['users'=>$users]);
    }
    public function downloadhwfile(Request $req,$file)
    {
        return response()->download(public_path('assets/'.$file));
    }
}
