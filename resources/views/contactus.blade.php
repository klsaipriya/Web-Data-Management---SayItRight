<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <script>
        function contactformvalidation(){
            var uname=document.contactform.uname.value;
            var cno=document.contactform.cno.value;
            var email=document.contactform.email.value;
            var query=document.contactform.query.value;
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var test=email.match(mailformat);
            if(uname==""){
                alert("Please Enter the Username");
                return false;
            }
            else if(cno==""){
                alert("Please Enter the Contact Information");
                return false;
            }
            else if(email=="" || test==false){
                alert("Please Enter the Valid Email adress.");
                return false;
            }
            else if(query.length<10){
                alert("Please convery your query.(Minimum character length=20)");
                return false;
            }
           // else{
             //   alert("Your query is submitted!!!Thankyou for contacting us, we will get back to you within next 48 hours.");
               // return true;
            //}
        }
    </script>
    <body>
        <div>
            <div class="contact-page">
                <nav class="nav-bar">
                    <div class="projectname">SayItRight</div>
                    <div class="nav-pages">
                        <ul>
                            <li><a href='/'>Home</a></li>
                            <li><a href="http://lxk3857.uta.cloud/blog/">Blog</a></li>
                            <li><a href='/aboutus'>About</a></li>
                            <li><a href='/services'>Services</a></li>
                            <li><a href='/contactus'>Contact</a></li>
                            <li><a href='/loginandregister'>Login/Register</a></li>
                        </ul>
                    </div>
                </nav>
                <div>
                    <p class="contact-heading">Contact Us</p>
                    <p id="contactdata">You can contact us through your queries, we will get back to you in a while!!!<br/>
                        Here are some basic details you need to enter before we connect.
                    </p>
                </div>
            </div>
            <div class="body-contactpage">
                <form class="contact-form" name="contactform" method="post" action="emailsend.php" onsubmit="return contactformvalidation()">
                    <input type="text" placeholder="Enter your full name" id="contactdata" name="uname"><br/>
                    <input type="tel" placeholder="Phone No" id="contactdata" name="cno"><br/>
                    <input type="email" placeholder="Email" id="contactdata" name="email"><br/>
                    <textarea placeholder="Enter your query" id="contactdata" name="query"></textarea><br/>
                    <button id="submit" type="submit" id="contactdata" name="submit">Submit</button>
                </form>
            </div>  
        </div>
    </body>
</html>