<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chat App Socket.io</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <style>
            .chatting-row 
            {
                margin: 50px;
            }
            .chat-content ul 
            {
                 margin: 0;
                 padding: 0;
                 list-style: none;
             }
             .chat-content ul li 
             {
                 padding:8px;
                 background: #928787;
                 margin-bottom:20px;
             }
             .chat-content ul li:nth-child(2n-2) 
             {
                background: #c3c5c5;
             }
             .chat-input 
             {
                 border: 1px soild lightgray;
                 border-top-right-radius: 10px;
                 border-top-left-radius: 10px;
                 padding: 8px 10px;
                 color:white;
                 background-color:rgb(1,17,68);
             }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row chatting-row">
                <div class="chat-content">
                    <ul> </ul>
                </div>
                <div class="chat-section">
                    <div class="chat-box">
                        <div class="chat-input" id="chatInput" contenteditable="">
                            <p>{{session('user_name');}}:</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.socket.io/4.0.1/socket.io.min.js" integrity="sha384-LzhRnpGmQP+lOvWruF/lgkcqD+WDVt9fU3H4BWmwP5u5LTmkUGafMcpZKNObVMLU" crossorigin="anonymous"></script>
        <script>
            $(function() {
                let ip_address = '127.0.0.1';
                let socket_port = '3000';
                let socket = io(ip_address + ':' + socket_port);
                let chatInput = $('#chatInput');
                chatInput.keypress(function(enter) {
                    let message = $(this).html();
                    let msg=message;
                    console.log(msg);
                    if(enter.which === 13 && !enter.shiftKey) {
                        socket.emit('sendChatToServer', message);
                        chatInput.html("Enter Your Netid Followed by Message");
                        return false;
                    }
                });
                socket.on('sendChatToClient', (message) => {
                    $('.chat-content ul').append(`<li>${message}</li>`);
                });
            });
        </script>
    </body>
</html>