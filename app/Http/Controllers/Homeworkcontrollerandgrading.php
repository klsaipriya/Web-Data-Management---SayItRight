<?php

namespace App\Http\Controllers;

use App\Models\HomeworkSubmissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Homeworkcontrollerandgrading extends Controller
{
    //
    public function submission(Request $req)
    {
        $submission=new HomeworkSubmissions();
        $submission->username=session('user_name');
        $submission->profid=$req->profid;
        $submission->subject=$req->subject;
        $file=$req->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $req->file->move('assets',$filename);
        $submission->filename=$filename;
        $submission->comments=$req->comments;
        $submission->save();
        $users=DB::select('select DISTINCT subject,profid from student_course_enrollments where username = ?',[session('user_name')]);
        return view('student-pages.managehomework',['users'=>$users]);
    }
}
