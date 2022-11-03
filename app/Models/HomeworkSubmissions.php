<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeworkSubmissions extends Model
{
    use HasFactory;
    protected $table='homework_submissions';
    public $timestamps=true;
    protected $fillable=["username","profid","subject","filename","comments","created_at","updated_at"];
}
