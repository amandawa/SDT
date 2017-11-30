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
    <link rel="stylesheet" href="profile.css" />
</head>
<body>
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
                    <li><a href="#">My Profile</a></li>
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

<div style="background:#FFFACD !important" class="jumbotron text-center">
    <h1>My Profile</h1>
</div>

<div class = "container-fluid">
<div class="row">
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id = "first_col">
      <img class="img-circle" id = "profile_pic" src="./images/profilepic.png" height ='200' width ='200' alt="Profile Picture"/>
      <br><br>
      <hr align = "left" width = "80%" >
      <h4>Contact Info:</h4>
      <label>Email:</label><br><br>
      <label>Phone Number:</label>
  </div>


  <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" id = "second_col">
    <h2>Amanda Wang</h2>
    <hr>
    <h4>Basic Info:</h4>
    <label>UID:</label><br><br>
    <label>Gender:</label><br><br>
    <label>Major:</label><br><br>
    <label>Birthday:</label><br><br>
    <label>Ethnicity:</label><br><br>
    <label>Interests:</label><br><br>

  </div>
</div>
</div>


<div class="button-group" id = "buttonContainer">
            <input type="submit" class="btn btn-info" value="Edit Profile" 
            style="width:70%;
                height: 40px;
                position:fixed;
                bottom:0px;
                text-align:center;
                left: 15%;
                font-size:16pt;
            ">
        </div>


<script>
    $(document).ready(mainProcessing);
              
    function mainProcessing() {
        let edit_profile = document.getElementById("buttonContainer").onclick = function () {
            window.location.href = "./EditProfile.php";
        }

    }
</script>        



</body>
</html>