<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right Advisor</title>
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
        <div id="profile-details">
            <h1>STUDENT DETAILS</h1>
            <form method="post" action="/adm-saveprofessordetails?username={{$username}}">
            @csrf
            <p>ProfId:{{$username}}</p>
            <p>Full Name:<br/><input type="text" name="fullname" value="{{$fullname}}"></p>
            <p>Contact:<br/><input type="text" name="contact" value="{{$contact}}"></p>
            <p>Email:<br/><input type="text" name="email" value="{{$email}}"></p>
            <button type="submit">Save Details</button>
            </form>
            
            
        </div>
        
    </body>
</html>