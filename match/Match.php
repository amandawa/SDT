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
    <link rel="stylesheet" href="match.css" />
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
                    <li><a href="../preferences/Preferences.php">Preferences</a></li>
                    <li><a href="./LoadMatches.php">Matches</a></li>
                        
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
    <h1>My Matches</h1>
</div>

<div class="container">
<input type="text" name="search" placeholder="Search.."><br><br>
    <div class="row display-flex">

    <?php
        require_once("../fun_tuna.php");
        $tuna = new fun_tuna();

        $my_uid = $_SESSION['my_uid'];
        

        $pref = Array();
        $pref['q1'] = $_SESSION['q1'];
        $pref['q2'] = $_SESSION['q2'];
        $pref['q3'] = $_SESSION['q3'];
        $my_pref = serialize($pref);
        //returns qualified candidates
        $arr = $tuna->searchImage($my_pref);
        //print_r ($arr);
        foreach($arr as $key => $entry){
            $temp = $tuna->getInfo($key);
            echo generatePic($temp);

        }

        

        function generatePic($arr) {
            $firstName = $arr['FirstName'];
            $lastName = $arr['LastName'];
            $age = $arr['Age'];
            $major = $arr['Major'];
            $percent = rand(50,100);
            $email = $arr['Email'];
            $phone = $arr['Phone'];
            if($percent < 60) {
                $color = "bad";
            } else {
                $color = "good";
            }
            $path = "../img/".$arr['Image'].".png";
            
            $question = array("q1"=>"Gender Preference: ",
            "q2"=>"Religion Preference: ",
            "q3"=>"Dogs or Cats: ",
            "q7"=>"Favorite Season: ",
            "q8"=>"Favorite Sport: ",
            "q4"=>"Dream Vacation: ",
            "q5"=>"Morning or Night: ",
            "q6"=>"Weekend Activities: ",
            "q9"=>"Super Power: ",
            "q10"=>"Do you like the outdoors?: ");
            $interest = "";
            foreach($arr as $key => $value){
                if($key{0} == 'q' && $question[$key] !== null){
                    $bucky = $question[$key];
                    $interest.=$bucky;
                    $interest.=$value;
                    $interest.="<br>";
                }
            }

    

$bodyy =<<< EOBODY
<div class="col-sm-5 col-md-4">
<div class="thumbnail">
    <img class = "img-circle" src="$path"  alt="Profile Picture">
        <div class="caption">
            <h3>$firstName $lastName</h3>
            <span><strong id = $color>$percent% match</strong></span>
            <p>  
                <label>Age: </label> $age<br>
                <label>Major: </label> $major <br>
                <label>Email: </label> $email <br>
                <label>Phone: </label> $phone <br>
                <label>Interests:</label>
                <pre>
$interest
                </pre>
            </p>
        
    </div>
</div>
</div>
EOBODY;
            return $bodyy;
        }
        //$my_info = $tuna->getInfo(113977367);
        //$_SESSION['my_uid'] = 113977367;

      
    ?>

</body>
</html>