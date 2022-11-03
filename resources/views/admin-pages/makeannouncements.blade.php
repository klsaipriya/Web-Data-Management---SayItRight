<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right Admin</title>
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
                            <li><a href="/adminpage">Dashboard</a></li>
                            <li><a href="/adm-managecourse">Manage Course</a></li>
                            <li><a href="/adm-manageprofessors">Manage Professors</a></li>
                            <li><a href="/adm-managestudents">Manage Students</a></li>
                            <li><a href="/adm-managestudentrecordings">Manage Student Recordings</a></li>
                            <li><a href="/adm-makeannouncements">Make Announcements</a></li>
                            <li><a href="/adminlogout">Logout</a></li>
                        </ul>
                    </div>
            </nav>
        </div>
        <div id="footer">
            Chat<a href="/chat"><img src="{{asset('images/chat-icon.png')}}"></a>
        </div>
        <div class="make-announcement">
            <form method="post" action="/adminannouncement">
            @csrf
            <input type="text" placeholder="Subject" id="announcement" name="subject"/><br/>
            <textarea value="Type here......." placeholder="Type Here......." id="announcement1" name="message"></textarea><br/>
            <button value="Make Announcement" id="announcement-button" type="submit">Make Announcement</button>
            </form>
        </div>
    </body>
</html>