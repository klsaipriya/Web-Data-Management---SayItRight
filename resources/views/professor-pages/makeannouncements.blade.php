<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right Professor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styling.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="login-registerpage">
            <nav class="nav-bar">
                <div class="titlename">SayItRight</div>
                    <div class="task-bar">
                        <ul>
                            <li><a href="/professorpage">Dashboard</a></li>
                            <!--<li><a href="managecourse.html">Manage Course</a></li>-->
                            <li><a href="/manageyourcourses">Open Course</a></li>
                            <li><a href="/profmanagestudents">Manage Students</a></li>
                            <li><a href="/profmanagestudentrecordings">Manage Student Recordings</a></li>
                            <li><a href="/managegrading">Manage Grading</a></li>
                            <li><a href="/makeannouncements">Make Announcements</a></li>
                            <li><a href="/professorlogout">Logout</a></li>
                        </ul>
                    </div>
            </nav>
        </div>
        <div id="footer">
            Chat<a href="/chat"><img src="{{asset('images/chat-icon.png')}}"></a>
        </div>
        <div class="make-announcement">
            <form method="post" action="/professorannouncement">
            @csrf
            <input type="text" placeholder="Subject" id="announcement" name="subject"/><br/>
            <input type="text" placeholder="Section No" id="announcement" name="section"/><br/>
            <textarea value="Type here......." placeholder="Type Here......." id="announcement1" name="message"></textarea><br/>
            <button value="Make Announcement" id="announcement-button" type="submit">Make Announcement</button>
            </form>
        </div>
    </body>
</html>