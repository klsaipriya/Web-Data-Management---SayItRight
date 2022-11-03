<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table="registers";
    public $timestamps=true;
    protected $fillable=["username","fullname","email","address","contact","password","confirmpass","filename","role","created_at","updated_at"];
}
