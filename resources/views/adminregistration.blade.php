<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/styling.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <script type="text/javascript">
        /*function formvalidation(){
            var uname=document.registrationform.username.value;
            var adress=document.registrationform.address.value;
            //alert(adress);
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var email=document.registrationform.email.value;
            var test=email.match(mailformat);
            var firstpassword=document.registrationform.password.value;
            var secondpassword=document.registrationform.confirmpassword.value;
            //alert(uname);
            if(uname==""||adress==""||email==""){
                alert("Please enter the required fields.Username,Address,Email.");
                return false;
            }
            else if(test==false){
                alert("Please Enter Valid Email.");
                return false;
            }
            else if(firstpassword!==secondpassword){
                alert("Passwords doesn't match.");
                return false;
            }
            else{
                alert("Registration was successfull!!!!");
                return true;
            }
        }*/
    </script>
    <body>
        <div class="test-page">
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
        <div class="Register">
            <h3>New User? SignUp</h3>
            <form name="registrationform" method="post" action='/adminregister' onsubmit="return formvalidation()" enctype="multipart/form-data"> 
                @if (Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if (Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <input type="text" placeholder=" Enter Your Username(NetId)" id="Registration" name="username" value="{{old('username')}}"><br/>
                <small class="text-danger">{{ $errors->first('username') }}</small>
                <input type="text" placeholder="Enter Your Full Name" id="Registration" name="fullname" value="{{old('fullname')}}"><br/>
                <small class="text-danger">{{ $errors->first('fullname') }}</small>
                <input type="email" placeholder="Enter Your Email" id="Registration" name="email" value="{{old('email')}}"><br/>
                <small class="text-danger">{{ $errors->first('email') }}</small>
                <input type="text" placeholder="Address" id="Registration" name="address" value="{{old('address')}}"><br/>
                <small class="text-danger">{{ $errors->first('address') }}</small>
                <input type="text" placeholder="Enter your contact info" id="Registration" name="contact" value="{{old('contact')}}"><br/>
                <small class="text-danger">{{ $errors->first('contact') }}</small>
                <!--Date Of Birth:<input type="date" placeholder="Date Of Birth" id="Registration" name="date"><br/>-->
                <input type="password" placeholder="Enter New Password" id="Registration" name="password" value="{{old('password')}}"><br/>
                <small class="text-danger">{{ $errors->first('password') }}</small>
                <input type="password" placeholder="Confirm Password" id="Registration" name="confirmpassword" value="{{old('confirmpassword')}}"><br/>

              
                <button id="Register" type="submit">Register</button>
            </form>
        </div>
</body>
</html>