<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right Advisor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body id="professor-page">
        <nav class="professor-navigation">
            <div class="titlename">SayItRight</div>
            <div class="task-bar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/aboutus">About</a></li>
                    <li><a href="http://lxk3857.uta.cloud/blog/">Blog</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contactus">Contact</a></li>
                    <li><a href="/advisorlogout">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div id="footer">
            Chat<a href="/chat"><img src="{{asset('images/chat-icon.png')}}"></a>
        </div>
        <div class="management">
            <div class="element">
                <img src="{{asset('images/manage.jpg')}}" width="300px" height="300px">
                <p><a href="/adv-managecourse">MANAGE COURSEWORK</a></p>
            </div>
            <div class="element">
                <img src="{{asset('images/manageprofessors.jpg')}}" width="300px" height="300px">
                <p><a href="/adv-manageprofessors">MANAGE PROFESSORS</a></p>
            </div>
            <div class="element">
                <img src="{{asset('images/studentprofile.jpg')}}" width="300px" height="300px">
                <p><a href="/adv-managestudents">MANAGE STUDENTS</a></p>
            </div>
            <div class="element">
                <img src="{{asset('images/hwschedule.jpg')}}" width="300px" height="300px">
                <p><a href="/adv-managestudentrecordings">MANAGE STUDENT INFORMATION</a></p>
            </div>
            <div class="element">
                <img src="{{asset('images/makeannouncement.jpg')}}" width="300px" height="300px">
                <p><a href="/adv-makeannouncements">MAKE ANNOUNCEMENTS</a></p>
            </div>
        </div>
    </body>
        </html>