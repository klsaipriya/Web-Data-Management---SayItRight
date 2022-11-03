<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professorannouncements;

class Professorannouncement extends Controller
{
    //
    public function storeannouncement(Request $req)
    {
        $announcement=new Professorannouncements();
        $announcement->username=session('user_name');
        $announcement->subject=$req->subject;
        $announcement->sectionno=$req->section;
        $announcement->message=$req->message;
        $announcement->role='professor';
        $announcement->save();
        return '<script>alert("Announcement is posted")</script>';
        return view('professor-pages.makeannouncements');
    }
}
