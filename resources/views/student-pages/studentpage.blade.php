<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right Student</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body id="professor-page">
        <nav class="professor-navigation">
            <div class="titlename">SayItRight</div>
            <div class="task-bar">
                <ul>
                    <li><a href='/'>Home</a></li>
                    <li><a href='/aboutus'>About</a></li>
                    <li><a href="http://lxk3857.uta.cloud/blog/">Blog</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contactus">Contact</a></li>
                    <li><a href="/studentlogout">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div id="footer">
            Chat<a href="/chat"><img src="{{asset('images/chat-icon.png')}}"></a>
        </div>
        <div class="management">
            <div class="element">
                <img src="{{asset('images/manage.jpg')}}" width="300px" height="300px">
                <p><a href="/studmanageyourcourses">MANAGE COURSEWORK</a></p>
            </div>
            <div class="element">
                <img src="{{asset('images/manageclass.png')}}" width="300px" height="300px">
                <p><a href="/manageclass">MANAGE CLASS SCHEDULE</a></p>
            </div>
            <div class="element">
                <img src="{{asset('images/managehomework.jpg')}}" width="300px" height="300px">
                <p><a href="/managehomework">HOMEWORK SUBMISSION</a></p>
            </div>
            <div class="element">
                <img src="{{asset('images/notifications.png')}}" width="300px" height="300px">
                <p><a href="/notifications">NOTIFICATIONS</a></p>
            </div>
            <div class="element">
                <img src="{{asset('images/updateprofile.jpg')}}" width="300px" height="300px">
                <p><a href="/updateprofile">UPDATE PROFILE</a></p>
            </div>
            <div class="element">
                <img src="{{asset('images/recordings.png')}}" width="300px" height="300px">
                <p><a href="/managerecordings">MANAGE RECORDINGS</a></p>
            </div>
        </div>
    </body>
</html>