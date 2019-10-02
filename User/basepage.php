    <head id="config">

        <title>Pizza Software</title>

        <meta charset = "utf-8">                
        <meta content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 


    </head>


    <body class="background" style="background-color:#262626">


        <div id = "header" style="min-height:10%">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#343434;">
                <img src="https://cdn.pixabay.com/photo/2014/04/03/00/32/pizza-308631_1280.png" style="height:6vh;">

                <button class="navbar-toggler" style="background-color:#e7ecef;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="SpanButton">
                    <span class="navbar-toggler-icon" style="height: 5vh;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="/PizzaSystem/User" style="color:#f7fff7;">Home<span class="sr-only">(current)</span></a>
                        </li>

                        <?php
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                            
                        }if (isset($_SESSION['username'])) {
                            if(!$_SESSION['username']){
                            echo '<li class="nav-item">
                                <a class="nav-link" href="loginpage.php" style="color:#e7ecef;">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="registerpage.php" style="color:#e7ecef;">Register</a>
                            </li>';
                            }else{
                                echo '<li class="nav-item">
                                    <a class="nav-link" href="userpage.php" style="color:#e7ecef;">User Page</a>
                                </li>';
                                echo '<li class="nav-item">
                                    <a class="nav-link" href="requestpage.php" style="color:#f7fff7;">Make a Request</a>
                                </li>';
                                
                            }
                        }else{
                            echo '<li class="nav-item">
                                <a class="nav-link" href="loginpage.php" style="color:#e7ecef;">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="registerpage.php" style="color:#e7ecef;">Register</a>
                            </li>';
                        }
                        
                        ?>

                        

                        

                    </ul>

                </div>
            </nav>

        </div>

    </body>