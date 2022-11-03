<?php $counter=0; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  type="text/css" href="{{asset('css/styling.css')}}">
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
        <table>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($users as $user)
            <tr>
            <td><?php $counter=$counter+1; echo $counter ?></td>
            <td>{{$user->username}}</td>
            <td>{{$user->fullname}}</td>
            <td>{{$user->contact}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->address}}</td>
            <td><a href="/adm-editstudentdata?username={{$user->username}}&fullname={{$user->fullname}}&contact={{$user->contact}}&&email={{$user->email}}&address={{$user->address}}">Edit</a></td>
            <td><a href="/adm-deletestudentdata?username={{$user->username}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>