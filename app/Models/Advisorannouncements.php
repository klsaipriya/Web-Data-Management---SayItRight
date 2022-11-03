<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisorannouncements extends Model
{
    use HasFactory;
    protected $table='advisorannouncements';
    public $timestamps=true;
    protected $fillable=["username","subject","message","created_at","updated_at"];
}
