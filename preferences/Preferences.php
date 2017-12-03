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

</head>
<body>
    <?php
     session_start();
    ?>
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
                    <li><a href="#">Preferences</a></li>
                    <li><a href="../match/LoadMatches.php">Matches</a></li>
                        
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
    <h1>Preferences</h1>
</div>

        <?php
            
            
            if(isset($_POST["submit"])){    
                $pref = Array();
                $pref['q1'] = $_POST['q1'];
                $pref['q2'] = $_POST['q2'];
                $pref['q3'] = $_POST['q3'];
                print_r($pref);
                $inpuut = serialize($pref);
                   
                $my_uid = $_SESSION['my_uid'];
                $_SESSION['q1'] = $pref['q1'];
                $_SESSION['q2'] = $pref['q2'];
                $_SESSION['q3'] = $pref['q3'];
                
                
            }
        ?>

<form action = "" method = "POST">
<div class="container">
    <form>
        <ol>
            <li>
            <div class="form-group">
                <label for="q1">Gender preference: </label><br>
                <input type = "radio" name = "q1" value = "any" > Any
                <input type = "radio" name = "q1" value = "male" checked> Male
                <input type = "radio" name = "q1" value = "female"> Female
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q2">What is your religion?</label><br>
                <input type = "radio" name = "q2" value = "none" checked> None<br>
                <input type = "radio" name = "q2" value = "christian"> Christian<br>
                <input type = "radio" name = "q2" value = "jewish"> Jewish<br>
                <input type = "radio" name = "q2" value = "muslim"> Muslim<br>
                <input type = "radio" name = "q2" value = "hindu"> Hindu<br>
                <input type = "radio" name = "q2" value = "buddhist"> Buddhist<br>
                <input type = "radio" name = "q2" value = "other"> Other<br>
            </div>
            </li>
           
            <li>
            <div class="form-group">
                <label for="q3">Are you a dog or cat person?</label><br>
                <input type = "radio" name = "q3" value = "dog" checked> Dog<br>
                <input type = "radio" name = "q3" value = "cat"> Cat<br>
                <input type = "radio" name = "q3" value = "both"> Both<br>
                <input type = "radio" name = "q3" value = "neither"> Neither<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q4">Which travel experience sounds the best to you?</label><br>
                    <input type="radio" name="q4" value="hike"> Hiking and ziplining through the wilderness<br>
                    <img src="./images/zipline.png" width = '350' height = '200'><br><br>
                    <input type="radio" name="q4" value="bungalow"> Staying in an overwater bungalow<br>
                    <img src="./images/bungalow.png" width = '350' height = '200'><br><br>
                    <input type="radio" name="q4" value="europe"> Backpacking across Europe<br>
                    <img src="./images/europe.png" width = '350' height = '200'><br><br>
                    <input type="radio" name="q4" value="northern"> Sleeping under the Northern Lights<br>
                    <img src="./images/igloo.png" width = '350' height = '200'><br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q5">Are you a morning or night person?</label><br>
                <input type = "radio" name = "q5" value = "morning"> Morning<br>
                <input type = "radio" name = "q5" value = "night"> Night<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q6">What do you like to do on the weekends?</label><br>
                <input type="radio" name="q6" value="sleep"> Sleep all day<br>
                <input type="radio" name="q6" value="party"> Party like an animal!!<br>
                <input type="radio" name="q6" value="outdoor"> Outdoor activities<br>
                <input type="radio" name="q6" value="videogames"> Play video games<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q7">Favorite Season?</label><br>
                <input type="radio" name="q7" value="summer"> Summer<br>
                <input type="radio" name="q7" value="fall"> Fall<br>
                <input type="radio" name="q7" value="winter"> Winter<br>
                <input type="radio" name="q7" value="spring"> Spring<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q8">Favorite Sport to watch on TV?</label><br>
                <input type="radio" name="q8" value="soccer"> Soccer<br>
                <input type="radio" name="q8" value="football"> Football<br>
                <input type="radio" name="q8" value="basketball"> Basketball<br>
                <input type="radio" name="q8" value="hockey"> Hockey<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q9">Choose a super power:</label><br>
                <input type="radio" name="q9" value="invisibility"> Invisibility<br>
                <input type="radio" name="q9" value="mindreading"> Mind Reading<br>
                <input type="radio" name="q9" value="timetravel"> Time Travel<br>
                <input type="radio" name="q9" value="immortality"> Immortality<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q10">Do you like the outdoors?</label><br>
                <input type="radio" name="q10" value="yes"> Yes<br>
                <input type="radio" name="q10" value="sometimes"> Sometimes<br>
                <input type="radio" name="q10" value="no"> No<br>
            </div>
            </li>

        </ol>


        
        <!-- Trigger the modal with a button -->
        <input type="submit" name = "submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"  
            style="width:70%;
                height: 40px;
                position:fixed;
                bottom:0px;
                text-align:center;
                left: 15%;
                font-size:16pt;
            "></input>
        </form>
        
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Preferences</h4>
              </div>
              <div class="modal-body">
                <p>Saved Successfully.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>
        <?php
        
        ?>
    </form>
</div>
<br><br><br>
</body>
</html>