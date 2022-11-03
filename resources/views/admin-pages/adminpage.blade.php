
<!DOCTYPE html>
<html>
    <head>
        <title>Say It Right Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            var analytics = <?php echo $role; ?>

            google.charts.load('current', {'packages':['corechart']});

            google.charts.setOnLoadCallback(drawChart);

            function drawChart()
            {
                var data = google.visualization.arrayToDataTable(analytics);
                var options = {
                title : 'Percentages By Role'
                };
                var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
                chart.draw(data, options);
            }
            
        </script>
    </head>
    <body id="admin-page">
        <nav class="admin-navigation">
            <div class="titlename">SayItRight</div>
            <div class="task-bar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/aboutus">About</a></li>
                    <li><a href="http://lxk3857.uta.cloud/blog/">Blog</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contactus">Contact</a></li>
                    <li><a href="/adminlogout">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div id="footer">
            Chat<a href="/chat"><img src="{{asset('images/chat-icon.png')}}"></a>
        </div>
        <div class="admin-homepage">
            <div id="pie_chart" style="width:750px; height:450px;"></div>
        </div>
        
        
        <div class="admin-insights">
            <ul>
                <li><a href="/adm-managecourse">MANAGE COURSEWORK</a></li>
                <li><a href="/adm-manageprofessors">MANAGE PROFESSORS</a></li>
                <li><a href="/adm-managestudents">MANAGE STUDENTS</a></li>
                <li><a href="/adm-managestudentrecordings">MANAGE STUDENT INFORMATION</a></li>
                <li><a href="/adm-makeannouncements">MAKE ANNOUNCEMENTS</a></li>
            </ul>
        </div>
    </body>
</html>