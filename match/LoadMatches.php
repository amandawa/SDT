<!DOCTYPE html>
<html lang="en">
<head>
    <title>SDT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/index.css" /> -->
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/bootstrap-slider.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- boostrap slider-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/css/bootstrap-slider.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/bootstrap-slider.min.js"></script>
    <link rel="stylesheet" href="load.css" />
    <style>
        /* Center the loader */
        #loader {
        position: absolute;
        left: 43%;
        top: 50%;
        z-index: 1;
        width: 500px;
        height: 500px;
        margin: -75px 0 0 -75px;
        border: 30px solid black;
        border-radius: 50%;
        border-top: 30px solid red;
        border-right: 30px solid black;
        border-bottom: 30px solid yellow;
        border-left: 30px solid white;
        width: 300px;
        height: 300px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from { bottom:-100px; opacity:0 } 
            to { bottom:0px; opacity:1 }
        }

        @keyframes animatebottom { 
            from{ bottom:-100px; opacity:0 } 
            to{ bottom:0; opacity:1 }
        }

        #myDiv {
            display: none;
            text-align: center;
        }
    </style>
</head>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">    
            <!-- Navigation Part 1-->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-heart"></span> UMDConnect</a>
                    
                <!-- button visible when navbar collapses -->
                <button type="button" class="navbar-toggle collapsed"
                        data-toggle="collapse" 
                        data-target="#navbarcontent">
                        
                <!-- displaying icon representing button -->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
                
            <!-- Navigation Part 2 has main content of navigation bar -->
            <div id="navbarcontent" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="../profile/Profile.php">My Profile</a></li>
                    <li><a href="../preferences/Preferences.php">Preferences</a></li>
                    <li><a href="#">Matches</a></li>
                        
                    <!-- dropdown for projects -->
                    <li class="dropdown">
                        <!-- dropdown tile -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Settings <span class="caret"</span>
                        </a>
                            
                        <!-- actual dropdown -->
                        <ul class="dropdown-menu">
                            <li><a href="#">Project #1</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Project #2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<body>

    <div style="background:#FFFACD !important;  margin-bottom:0px" class="jumbotron text-center">
        <h1>Get Connected</h1>
    </div>

    <div id ="myDiv" style="display:block;">
        <div class="bg">

        </div>
        <div id = "buttons">
            <button id = "btn" onclick="myFunction()" type="button" class="btn btn-primary btn-lg">
            Find My Matches!
            </button>
            <img src="turtlelove.png" alt="Turtle Image">
        </div>
        <div id="turtle"  style="display:none;" class="animate-bottom">
            <img src="turtlelove.png" alt="Turtle Image" width ="150" height="150">
        </div>

    </div>

    <div id="loader" style="display:none;" class="animate-bottom"></div>


</body>


<script>
    // Displays loading wheel
    var myVar;

    function myFunction() {
        showPage();
        setTimeout(goToMatch, 4000);
    }

    function goToMatch() {
        document.location.href = "./Match.php";
    }

    function showPage() {
        document.getElementById("loader").style.display = "block";
        document.getElementById("turtle").style.display = "block";
        document.getElementById("buttons").style.display = "none";
    }


</script>
</html>