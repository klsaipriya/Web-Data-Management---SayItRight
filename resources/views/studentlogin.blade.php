<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <script>
       /* function loginvalidation(){
            var uname=document.loginform.Username.value;
            var pass=document.loginform.password.value;
            if(uname==""){
                alert("Please enter the Username");
                return false;
            }
            else if(pass==""){
                alert("Please enter the password");
                return false;
            }

        }*/
    </script>
    <body>
        <div class="login-registerpage">
            <nav class="nav-bar">
                <div class="titlename">SayItRight</div>
                <div class="task-bar">
                    <ul>
                        <li><a href='/'>Home</a></li>
                        <li><a href='/aboutus'>About</a></li>
                        <li><a href="http://lxk3857.uta.cloud/blog/">Blog</a></li>
                        <li><a href='/services'>Services</a></li>
                        <li><a href='/contactus'>Contact</a></li>
                        <li><a href='/loginandregister'>Login/Register</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <h1 id="login-heading">STUDENT LOGIN</h1>
        <div class="student-login">
            <form name="loginform" method="post" action="/studentlogin">
                @csrf
                <label>Username</label><br/>
                <input type="text" name="username" id="username"><br/><br/>
                <small class="text-danger">{{ $errors->first('username') }}</small><br/>
                <label>Password</label><br/>
                <input type="password" name="password" id="password"><br/><br/>
                <small class="text-danger">{{ $errors->first('password') }}</small><br/>
                <button type="submit" value="Login" id="submit" name="submit">Login</button>
            </form>
        </div>
    </body>
</html>