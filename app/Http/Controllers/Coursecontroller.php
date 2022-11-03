<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessorCourses;
use App\Models\StudentCourseEnrollment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Coursecontroller extends Controller
{
    //
    public function opencourse(Request $req)
    {
        $course=new ProfessorCourses();
        $course->cid=$req->cid;
        $course->username=session('user_name');
        $course->subject=$req->subject;
        $course->section=$req->section;
        $course->days=$req->days;
        $course->fromtime=$req->fromtime;
        $course->totime=$req->totime;
        $course->save();
        return view('professor-pages.manageyourcourses');
    }

    public function displaycourses()
    {
        $users = DB::select('select * from registers,professor_courses where professor_courses.username = registers.username');
        return view('student-pages.manageyourcourses',['users'=>$users]);
    }
    public function enrollment(Request $req)
    {
        $courseenroll=new StudentCourseEnrollment();
        $courseenroll->username=session('user_name');
        $courseenroll->profid=$req->username;
        $courseenroll->cid=$req->cid;
        $courseenroll->profname=$req->fullname;
        $courseenroll->subject=$req->subject;
        $courseenroll->days=$req->days;
        $courseenroll->fromtime=$req->fromtime;
        $courseenroll->totime=$req->totime;
        $courseenroll->save();
        $users = DB::select('select * from registers,professor_courses where professor_courses.username = registers.username');
        return view('student-pages.manageyourcourses',['users'=>$users]);
        //return view('student-pages.manageyourcourses');
    }
    public function displayenrolledcourses()
    {
        $users = DB::select('select DISTINCT cid,profname,subject,days,fromtime,totime from student_course_enrollments where username = ?',[session('user_name')]);
        return view('student-pages.manageclass',['users'=>$users]);
    }
    public function displaynotifications()
    {
        $role="professor";
        $users=DB::select('select DISTINCT professorannouncements.subject,professorannouncements.message from student_course_enrollments,professorannouncements where student_course_enrollments.profid=professorannouncements.username AND role = ? AND student_course_enrollments.username = ? ',[$role,session('user_name')]);
        return view('student-pages.notifications',['users'=>$users]);
    }
    public function hwdisplaycourse()
    {
        $users=DB::select('select DISTINCT subject,profid from student_course_enrollments where username = ?',[session('user_name')]);
        return view('student-pages.managehomework',['users'=>$users]);
    }
    public function hwattachment(Request $req)
    {
        $subject=$req->subject;
        $profid=$req->profid;
        //echo $subject;
        //echo $profid;
        return view('student-pages.homeworkattachment',['subject'=>$subject,'profid'=>$profid]);
        //return view('student-pages.homeworkattachment')->with('subject', $subject)->
                //with('profid', $profid);
    }
}
