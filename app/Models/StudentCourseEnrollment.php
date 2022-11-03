<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourseEnrollment extends Model
{
    use HasFactory;
    protected $table="student_course_enrollments";
    public $timestamps=true;
    protected $fillable=["username","profid","cid","profname","subject","days","fromtime","totime","created_at","updated_at"];
}
