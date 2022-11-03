<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professorannouncements extends Model
{
    use HasFactory;
    protected $table="professorannouncements";
    public $timestamps=true;
    protected $fillable=["username","sectionno","subject","mesage","role","created_at","updated_at"];
}
