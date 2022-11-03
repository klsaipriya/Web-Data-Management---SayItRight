<?php $counter=0; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right Student</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styling.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <script type="text/javascript">
        $(document).ready(function () 
        {
            $("#btn-submit").attr("disabled", true);
            return true;
        });
    </script>

    <body>
        <div class="login-registerpage">
            <nav class="nav-bar">
                <div class="titlename">SayItRight</div>
                    <div class="task-bar">
                        <ul>
                            <li><a href="/studentpage">Dashboard</a></li>
                            <li><a href="/studmanageyourcourses">Manage Your Courses</a></li>
                            <li><a href="/manageclass">Manage Class</a></li>
                            <li><a href="/managehomework">Homework Submissions</a></li>
                            <li><a href="/notifications">Notifications</a></li>
                            <li><a href="/updateprofile">Update Profile</a></li>
                            <li><a href="/managerecordings">Manage Recordings</a></li>
                            <li><a href="/checkscores">Check Your Scores</a></li>
                            <li><a href="/studentlogout">Logout</a></li>
                        </ul>
                    </div>
            </nav>
        </div>
        <div id="footer">
            Chat<a href="/chat"><img src="{{asset('images/chat-icon.png')}}"></a>
        </div>
        <table>
            <tr>
                <th>#</th>
                <th>CourseId</th>
                <th>Subject</th>
                <th>Days</th>
                <th>From</th>
                <th>To</th>
                <th>Professor Name</th>
                <th>Choice</th>
            </tr>
            @foreach($users as $user)
                <tr>
                <td><?php $counter=$counter+1; echo $counter; ?></td>
                <td>{{$user->cid}}</td>
                <td>{{$user->subject}}</td>
                <td>{{$user->days}}</td>
                <td>{{$user->fromtime}}</td>
                <td>{{$user->totime}}</td>
                <td>{{$user->fullname}}</td>
                <td><a href="/enroll?username={{$user->username}}&cid={{$user->cid}}&subject={{$user->subject}}&days={{$user->days}}&fromtime={{$user->fromtime}}&totime={{$user->totime}}&fullname={{$user->fullname}}"><button id="btn-submit" onClick="this.disabled=true;">Enroll</button></a></td>
                </tr>
            @endforeach
            
        </table>
        
    </body>
</html>