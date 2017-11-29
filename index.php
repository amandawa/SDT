<!DOCTYPE html>
<html lang="en">
<head>
    <title>SDT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>Single Terminator</h1>
    <p>Say GoodBye To Single Life</p>
    <img src="img/dog.jpeg" class="img-circle" alt="logo" style="width:10em; height: 10em;">
</div>


<div class="container">
    <form>
        <div class="form-group">
            <label for="usr">User Name:</label>
            <input type="text" class="form-control" id="usr" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" required>
        </div>
        <div class="button-group">
            <input type="button" class="btn btn-info" value="New User" style="width:8em; ">
            <input type="submit" class="btn btn-info" value="Login" style="width:8em;">
        </div>
    </form>
    <br>
    <form action = "./preferences/Preferences.php" method = "post">
    <input type="submit" class="btn btn-info" value="Go To Preferences (For testing)" style="width:15em;">
    </form>
</div>
</body>
</html>