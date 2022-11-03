<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessorCourses extends Model
{
    use HasFactory;
    protected $table="professor_courses";
    public $timestamps=true;
    protected $fillable=["cid","username","subject","section","days","fromtime","totime","created_at","updated_at"];
}
