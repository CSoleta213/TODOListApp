<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <style>
            body {
                margin-top: 3%;
                margin-left: 40%;
                margin-right: 40%;
                font-family: 'Montserrat', sans-serif;
            }
            
            #new-task, #current-task {
                background: #289ae7;
                width: 100%;
                border-radius: 15px 15px 0px 0px;
                color: #fff;
                font-size: 25px;
                padding: 8px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .task {
                margin-left: 5%;
                margin-bottom: 5px;
            }

            .col-sm-6 input {
                width: 85%;
                padding: 10px;
                border-radius: 6px;
                margin-left: 5%;
            }
            
            .form-group button, #delete-button {
                margin-left: 5%;
                padding: 10px;
                font-family: 'Montserrat', sans-serif;
                border-radius: 6px;
                width: 150px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>

        @yield('content')
    </body>
</html>