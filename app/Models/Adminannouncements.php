<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminannouncements extends Model
{
    use HasFactory;
    protected $table='adminannouncements';
    public $timestamps=true;
    protected $fillable=["username","subject","message","created_at","updated_at"];
}
