<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGrading extends Model
{
    use HasFactory;
    protected $table='student_gradings';
    public $timestamps=true;
    protected $fillable=["profid","username","subject","comments","grade","created_at","updated_at"];
}
