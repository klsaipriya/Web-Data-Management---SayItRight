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
            <form method="post" action="/opencourses" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="CourseId" id="announcement" name="cid"/><br/>
            <input type="text" placeholder="Section No" id="announcement" name="section"/><br/>
            <input type="text" placeholder="Subject" id="announcement" name="subject"/><br/>
            <input type="text" placeholder="Course Days" id="announcement" name="days" /><br/><br/>
            <label id="announcement">From</label>
            <input type="time" placeholder="Timing" id="announcement" name="fromtime"/><br/><br/>
            <label id="announcement">To</label>
            <input type="time" placeholder="Timing" name="totime" id="announcement"/><br/>
            <button value="Open Course" id="announcement-button" type="submit">Open Course</button>
            </form>
        </div>
    </body>
</html>