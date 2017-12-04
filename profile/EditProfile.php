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

    <?php
        // sudo chown daemon /Applications/XAMPP/xamppfiles/htdocs/fall2017/SDT/profile/images
	    // serverUploadDirectory represents the directory where uploaded files will be placed
	    // Replace with your own path.  $serverUploadDirectory specified below corresponds to
        // windows environment. For Mac environment use $serverUploadDirectory = "/tmp"
        if($_POST) {    
	        $serverUploadDirectory =  getcwd()."/images"; 
            $tmpFileName = $_FILES['filename']['tmp_name'];
            $serverFileName = $serverUploadDirectory."/".$_FILES['filename']['name'];
            if (file_exists($serverFileName)) {
                // echo "Sorry, file already exists.";
            } else {
	            // checking the file was uploaded via HTTP POST (to avoid tricking the
	            // script into working on files it should not be working on (e.g., passwd)
	            if (!is_uploaded_file($tmpFileName)) {
		            // print("<b>File upload cannot be completed</b>");
                } else {
		            // At this point you can check the validity of the file type, size, etc.
		            // copying file from temporary location
		            if (!move_uploaded_file($tmpFileName, $serverFileName)) {
			            // print("<b>File upload cannot be completed</b>");
                    } else {
			            // print("<b>File upload complete</b>");
		            }
                }
            }
        }
    ?>



    <?php 

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
                    <li><a href="./Profile.php">My Profile</a></li>
                    <li><a href="../preferences/Preferences.php">Preferences</a></li>
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
        <h1>Edit My Profile</h1>
    </div>

    <?php
        require_once("../fun_tuna.php");
        session_start();
            $tuna = new fun_tuna();
            //$my_uid = $_SESSION['my_uid'];
            $my_uid = $_SESSION['my_uid'];
            
            $temp = $tuna->getInfo($my_uid);
            
            $uid = $my_uid;
            $firstName = $temp['FirstName'];
            $lastName = $temp['LastName'];
            $email = $temp['Email'];
            $phone = $temp['Phone'];
            $password = $temp['Password'];
            $age = $temp['Age'];
            $major = $temp['Major'];
            $ethnicity = $temp['Ethnicity'];

    ?>

    <div class = "container-fluid">
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id = "first_col">
                <img class="img-circle" id = "profile_pic" src="images/profilepic.png" height ='200' width ='200'/>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data"><br>
                    Select image to upload:
                    <input type="file" name="filename" id="fileToUpload"><br>
                    <input id = "submit" type="submit" value="Upload Image" name="submit">
                </form>
                <hr align = "left" width = "80%" >
                <form action = "Profile.php" method = "post">
                <h4>Contact Info:</h4>
                <label for ="email">Email:</label>
                <input type="email" class="form-control" name = "email" id="email" value = "<?php echo $email; ?>">
                <br><br>
                <label>Phone Number:</label>
                <input type = "text" class="form-control" name = "phone" id="phonenum" value = "<?php echo $phone;?>">
    
            </div>


            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" id = "second_col">
                <h2><?php echo $firstName; ?> <?php echo $lastName; ?></h2>
                <hr>
                <h4>Basic Info:</h4>
                
                    <div class="form-group">
                        <label for="uid">UID:</label>
                        <input type="text" name = "uid" class="form-control" id="uid" value = "<?php echo $uid; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name = "pass" class="form-control" id="pwd" value = "******">
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="text" class="form-control" name = "age" id="age" value = "<?php echo $age; ?>">
                    </div>
                    <div class="form-group">
                        <label for="major">Major:</label>
                        <input type="text" class="form-control" name = "major" id="major" value = "<?php echo $major; ?>">
                    </div>
                    <div class="form-group">
                        <label for="ethnicity">Ethnicity:</label>
                        <input type="text" class="form-control" name = "ethnicity" id="ethnicity" value = "<?php echo $ethnicity; ?>">
                    </div>
                    <div class="form-group">
                        <fieldset>
                        <label for="interests">Interests:</label><br>
                            <textarea rows="5" cols="80" name="interests"></textarea>
                        </fieldset>
                    </div>
                    <br><br><br><br>
                    <div class="button-group" id = "buttonContainer">
                        <input type="submit" name="submit" id = "save"class="btn btn-info" value="Save Profile Changes" 
                            style="width:70%;
                            height: 40px;
                            position:fixed;
                            bottom:0px;
                            text-align:center;
                            left: 15%;
                            font-size:16pt;
                        ">
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(mainProcessing);
              
    function mainProcessing() {
        try {
            var filename = "profilepic.png";
            let profile_pic = document.getElementById("profile_pic").src = "./images/"+filename;
        } catch(e) {
            //do nothing
        }
        
        // document.getElementById("save").onclick = function () {
        //     window.location.href = "./Profile.php";
        // }

    }
</script>        



</body>
</html>