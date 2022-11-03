<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentLogincontroller;
use App\Http\Controllers\ProfessorLogincontroller;
use App\Http\Controllers\AdvisorLogincontroller;
use App\Http\Controllers\AdminLogincontroller;
use App\Http\Controllers\updateprofilecontroller;
use App\Http\Controllers\Coursecontroller;

Route::get('/', function () {
    return view('index');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/loginandregister', function () {
    return view('loginandregister');
});

Route::get('/loginroleregistration', function () {
    return view('loginroleregistration');
});

Route::get('/studentregistration', function () {
    return view('studentregistration');
});

Route::get('/professorregistration', function () {
    return view('professorregistration');
});

Route::get('/advisorregistration', function () {
    return view('advisorregistration');
});

Route::get('/adminregistration', function () {
    return view('adminregistration');
});

Route::get('/studentlogin', function () {
    return view('studentlogin');
});

Route::get('/professorlogin', function () {
    return view('professorlogin');
});

Route::get('/advisorlogin', function () {
    return view('advisorlogin');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/loginrole', function () {
    return view('loginrole');
});

Route::get('/studentpage', function () {
    return view('student-pages.studentpage');
});

Route::get('/professorpage', function () {
    return view('professor-pages.professorpage');
});

Route::get('/advisorpage', function () {
    return view('advisor-pages.advisorpage');
});

Route::get('/adminpage', function () {
    return view('admin-pages.adminpage');
});

Route::get('/manageyourcourses', function () {
    return view('professor-pages.manageyourcourses');
});

Route::get('/makeannouncements', function () {
    return view('professor-pages.makeannouncements');
});






//Route::get('/updateprofile','App\Http\Controllers\updateprofilecontroller@update');
Route::post('/studentregister','App\Http\Controllers\StudentregistrationController@store');
Route::post('/professorregister','App\Http\Controllers\ProfessorregistrationController@store');
Route::post('/advisorregister','App\Http\Controllers\AdvisorregistrationController@store');
Route::post('/adminregister','App\Http\Controllers\AdminregistrationController@store');

Route::post('/studentlogin',[StudentLogincontroller::class,'info']);
Route::post('/professorlogin',[ProfessorLogincontroller::class,'info']);
Route::post('/advisorlogin',[AdvisorLogincontroller::class,'info']);
Route::post('/adminlogin',[AdminLogincontroller::class,'info']);

Route::get('/studmanageyourcourses','App\Http\Controllers\Coursecontroller@displaycourses');
Route::get('/manageclass','App\Http\Controllers\Coursecontroller@displayenrolledcourses');
Route::get('/managehomework','App\Http\Controllers\Coursecontroller@hwdisplaycourse');
Route::get('/homeworkattachment','App\Http\Controllers\Coursecontroller@hwattachment');
Route::post('/hwsubmit','App\Http\Controllers\Homeworkcontrollerandgrading@submission');
Route::get('/notifications','App\Http\Controllers\Coursecontroller@displaynotifications');
Route::get('/enroll','App\Http\Controllers\Coursecontroller@enrollment');
Route::get('/updateprofile','App\Http\Controllers\updateprofilecontroller@update');
Route::get('/editdetails','App\Http\Controllers\updateprofilecontroller@updatenew');
Route::get('/checkscores','App\Http\Controllers\updateprofilecontroller@checkscores');
Route::get('/managerecordings','App\Http\Controllers\updateprofilecontroller@readaudio');
Route::post('/savedetails','App\Http\Controllers\updateprofilecontroller@save');
Route::post('/updateaudio','App\Http\Controllers\updateprofilecontroller@updatenewaudio');
Route::get('/studentlogout',function(){
    if(session()->has('user_name')){
        $var=session()->pull('user_name');
    }
    return view('studentlogin');
});


//Professor-pages
Route::post('/opencourses','App\Http\Controllers\Coursecontroller@opencourse');
Route::get('/profmanagestudents','App\Http\Controllers\Studentcontroller@managestudents');
Route::get('/managegrading','App\Http\Controllers\Studentcontroller@managegrading');
Route::get('/downloadfile/{file}','App\Http\Controllers\Studentcontroller@downloadhwfile');
Route::get('/evaluate','App\Http\Controllers\Studentcontroller@evaluate');
Route::get('/profmanagestudentrecordings','App\Http\Controllers\Studentcontroller@managestudentrecordings');
Route::post('/professorannouncement','App\Http\Controllers\Professorannouncement@storeannouncement');
Route::post('/submitgrading','App\Http\Controllers\Studentcontroller@postgrades');
Route::get('/professorlogout',function(){
    if(session()->has('user_name')){
        $var=session()->pull('user_name');
    }
    return view('professorlogin');
});

//Advisorpages
Route::get('/adv-makeannouncements',function()
{
    return view('advisor-pages.makeannouncements');
});

Route::get('/adv-managecourse','App\Http\Controllers\Advisorpagecontroller@managecourse');
Route::get('/adv-managestudents','App\Http\Controllers\Advisorpagecontroller@managestudents');
Route::get('/adv-manageprofessors','App\Http\Controllers\Advisorpagecontroller@manageprofessors');
Route::get('/adv-managestudentrecordings','App\Http\Controllers\Advisorpagecontroller@managestudentrecordings');
Route::post('/advisorannouncement','App\Http\Controllers\Advisorpagecontroller@makeannouncement');
Route::get('/delete','App\Http\Controllers\Advisorpagecontroller@deleterecordings');
Route::get('/editstudentdata','App\Http\Controllers\Advisorpagecontroller@displaystudentdata');
Route::get('/editprofessordata','App\Http\Controllers\Advisorpagecontroller@displayprofessordata');
Route::post('/savestudentdetails','App\Http\Controllers\Advisorpagecontroller@updatestudentdata');
Route::post('/saveprofessordetails','App\Http\Controllers\Advisorpagecontroller@updateprofessordata');
Route::get('/deletecoursedata','App\Http\Controllers\Advisorpagecontroller@deletecoursedata');
Route::get('/advisorlogout',function(){
    if(session()->has('user_name')){
        $var=session()->pull('user_name');
    }
    return view('advisorlogin');
});

//Adminpages
Route::get('/adminpage','App\Http\Controllers\Adminpagecontroller@adminpage');
Route::get('/adm-makeannouncements',function()
{
    return view('admin-pages.makeannouncements');
});
Route::get('/adm-managecourse','App\Http\Controllers\Adminpagecontroller@managecourse');
Route::get('/adm-managestudents','App\Http\Controllers\Adminpagecontroller@managestudents');
Route::get('/adm-manageprofessors','App\Http\Controllers\Adminpagecontroller@manageprofessors');
Route::get('/adm-managestudentrecordings','App\Http\Controllers\Adminpagecontroller@managestudentrecordings');
Route::post('/adminannouncement','App\Http\Controllers\Adminpagecontroller@makeannouncement');
Route::get('/adminlogout',function(){
    if(session()->has('user_name')){
        $var=session()->pull('user_name');
    }
    return view('adminlogin');
});

Route::get('/chat',function(){
    return view('chat');
});
Route::get('/adm-editstudentdata','App\Http\Controllers\Adminpagecontroller@displaystudentdata');
Route::get('/adm-deletestudentdata','App\Http\Controllers\Adminpagecontroller@deletestudentdata');
Route::get('/adm-editprofessordata','App\Http\Controllers\Adminpagecontroller@displayprofessordata');
Route::get('/adm-deleteprofessordata','App\Http\Controllers\Adminpagecontroller@displayprofessordata');
Route::post('/adm-savestudentdetails','App\Http\Controllers\Adminpagecontroller@updatestudentdata');
Route::post('/adm-saveprofessordetails','App\Http\Controllers\Adminpagecontroller@updateprofessordata');
Route::post('/adm-saveprofessordetails','App\Http\Controllers\Adminpagecontroller@updateprofessordata');
Route::post('/adm-savecoursedetails','App\Http\Controllers\Adminpagecontroller@updatecoursedata');
Route::get('/deleteaudio','App\Http\Controllers\Adminpagecontroller@deleterecordings');
Route::get('/adm-editcoursedata','App\Http\Controllers\Adminpagecontroller@displaycoursedata');
Route::get('/adm-deletecoursedata','App\Http\Controllers\Adminpagecontroller@deletecoursedata');





