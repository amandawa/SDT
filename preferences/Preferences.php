<!DOCTYPE html>
<html lang="en">
<head>
    <title>SDT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">    
            <!-- Navigation Part 1-->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">UMDConnect</a>
                    
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
                    <li><a href="#"><span class="glyphicon glyphicon-home"</span></a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Preferences</a></li>
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
    <h1>Preferences</h1>
</div>


<div class="container">
    <form>
        <ol>
            <li>
            <div class="form-group">
                <label for="q1">Gender preference: </label><br>
                <input type = "radio" name = "q1" value = "any"> Any
                <input type = "radio" name = "q1" value = "male"> Male
                <input type = "radio" name = "q1" value = "female"> Female
            </div>
            </li>
            <li>
            <div class="form-group">
                <label for="q2">Major preference:</label><br>
                <select name="q2">
                    <option value="none" selected>None</option>
                    <option value="cs">Computer Science</option>
                    <option value="business">Engineering</option>
                    <option value="engineer">Business</option>
                </select>
            </div>
            </li>
            <li>
            <div class="form-group">
                <label for="q3">What is your religion?</label><br>
                <input type = "radio" name = "q3" value = "none"> None<br>
                <input type = "radio" name = "q3" value = "christian"> Christian<br>
                <input type = "radio" name = "q3" value = "jewish"> Jewish<br>
                <input type = "radio" name = "q3" value = "muslim"> Muslim<br>
                <input type = "radio" name = "q3" value = "hindu"> Hindu<br>
                <input type = "radio" name = "q3" value = "buddhist"> Buddhist<br>
                <input type = "radio" name = "q3" value = "other"> Other<br>
            </div>
            </li>
            <li>
            <div class="form-group">
                <label for="q4">On a scale of 1 to 10, how outgoing are you? (1 very shy, 10 very outgoing)</label><br>
                <div id="slidecontainer">
                <input id="q4slider" 
                type="text"
                data-provide="slider"
                data-slider-ticks="[1, 2, 3,4,5,6,7,8,9,10]"
                data-slider-ticks-labels='["1", "2", "3","4", "5", "6", "7", "8", "9", "10"]'
                data-slider-min="1"
                data-slider-max="10"
                data-slider-step="1"
                data-slider-value="1"/>
                </div>
            </div>
            </li>
            <li>
            <div class="form-group">
                <label for="q5">What Zodiac sign are you? </label><br>
                <select name="q5">
                    <option value="aquarius" >Aquarius (January 20 - February 18)</option>
                    <option value="pisces">Pisces (February 19- March 20)</option>
                    <option value="aries">Aries (March 21 to April 19)</option>
                    <option value="taurus">Taurus (April 20 - May 20)</option>
                    <option value="gemini">Gemini (May 21 - June 21)</option>
                    <option value="cancer">Cancer (June 21 - July 22)</option>
                    <option value="virgo">Virgo (August 23 - September 22)</option>
                    <option value="libra">Libra (September 23 - October 22)</option>
                    <option value="scorpio">Scorpio (October 23 - November 21)</option>
                    <option value="sagittarius">Sagittarius (November 22 - December 21)</option>
                    <option value="capricorn">Capricorn (December 22 - January 19)</option>
                </select>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q6">What music genre do you like best?</label><br>
                <input type="radio" name="q6" value="alternative"> Alternative Music<br>
                <input type="radio" name="q6" value="country"> Country Music<br>
                <input type="radio" name="q6" value="electronic"> Electronic Music<br>
                <input type="radio" name="q6" value="hiphop"> Hip Hop / Rap<br>
                <input type="radio" name="q6" value="asian"> Asian Pop <br>
                <input type="radio" name="q6" value="pop"> Pop <br>
                <input type="radio" name="q6" value="rb"> R&amp;B / Soul<br>
                <input type="radio" name="q6" value="rock"> Rock<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q7">Are you a dog or cat person?</label><br>
                <input type = "radio" name = "q7" value = "dog"> Dog<br>
                <input type = "radio" name = "q7" value = "cat"> Cat<br>
                <input type = "radio" name = "q7" value = "both"> Both<br>
                <input type = "radio" name = "q7" value = "neither"> Neither<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q8">Are you a morning or night person?</label><br>
                <input type = "radio" name = "q8" value = "morning"> Morning<br>
                <input type = "radio" name = "q8" value = "night"> Night<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q9">Which travel experience sounds the best to you?</label><br>
                    <input type="radio" name="q9" value="hike"> Hiking and ziplining through the wilderness<br>
                    <img src="./images/zipline.png" width = '350' height = '200'><br><br>
                    <input type="radio" name="q9" value="bungalow"> Staying in an overwater bungalow<br>
                    <img src="./images/bungalow.png" width = '350' height = '200'><br><br>
                    <input type="radio" name="q9" value="europe"> Backpacking across Europe<br>
                    <img src="./images/europe.png" width = '350' height = '200'><br><br>
                    <input type="radio" name="q9" value="northern"> Sleeping under the Northern Lights<br>
                    <img src="./images/igloo.png" width = '350' height = '200'><br>
            </div>
            </li>


            <li>
            <div class="form-group">
                <label for="q10">Any food restrictions?</label><br>
                <input type="radio" name="q10" value="vegetarian"> Vegetarian<br>
                <input type="radio" name="q10" value="vegan"> Vegan<br>
                <input type="radio" name="q10" value="none"> None<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q11">What do you like to do on the weekends?</label><br>
                <input type="radio" name="q11" value="relax"> Relax and chill with my friends<br>
                <input type="radio" name="q11" value="sleep"> Sleep all day<br>
                <input type="radio" name="q11" value="party"> Party like an animal!!<br>
                <input type="radio" name="q11" value="outdoor"> Outdoor activities<br>
                <input type="radio" name="q11" value="videogames"> Play video games<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q12">Favorite Season?</label><br>
                <input type="radio" name="q12" value="summer"> Summer<br>
                <input type="radio" name="q12" value="fall"> Fall<br>
                <input type="radio" name="q12" value="winter"> Winter<br>
                <input type="radio" name="q12" value="spring"> Spring<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q13">Favorite Sport to watch on TV?</label><br>
                <input type="radio" name="q13" value="soccer"> Soccer<br>
                <input type="radio" name="q13" value="football"> Football<br>
                <input type="radio" name="q13" value="basketball"> Basketball<br>
                <input type="radio" name="q13" value="hockey"> Hockey<br>
                <input type="radio" name="q13" value="baseball"> Baseball<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q14">Choose a super power:</label><br>
                <input type="radio" name="q14" value="invisibility"> Invisibility<br>
                <input type="radio" name="q14" value="mindreading"> Mind Reading<br>
                <input type="radio" name="q14" value="timetravel"> Time Travel<br>
                <input type="radio" name="q14" value="strength"> Superhuman Strength<br>
                <input type="radio" name="q14" value="immortality"> Immortality<br>
                <input type="radio" name="q14" value="shapeshifting"> Shapeshifting<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q15">Do you like the outdoors?</label><br>
                <input type="radio" name="q15" value="yes"> Yes<br>
                <input type="radio" name="q15" value="sometimes"> Sometimes<br>
                <input type="radio" name="q15" value="no"> No<br>
            </div>
            </li>

            <li>
            <div class="form-group">
                <label for="q16">How often do you work out?</label><br>
                <input type="radio" name="q16" value="everyday"> Every day<br>
                <input type="radio" name="q16" value="everyotherday"> Every other day<br>
                <input type="radio" name="q16" value="once"> Once a week<br>
                <input type="radio" name="q16" value="whenever"> Whenever I feel like it<br>
                <input type="radio" name="q16" value="never"> Never<br>
            </div>
            </li>
     
            <li>
            <div class="form-group">
                <label for="q17">What social media would you like to connect through?</label><br>
                <input type="radio" name="q17" value="facebook"> Facebook<br>
                <input type="radio" name="q17" value="instagram"> Instagram<br>
                <input type="radio" name="q17" value="snapchat"> Snapchat<br>
                <input type="radio" name="q17" value="linkedin"> LinkedIn<br>
                <input type="radio" name="q17" value="tumblr"> Tumblr<br>
                <input type="radio" name="q17" value="twitter"> Twitter<br>

            </div>
            </li>


            <li>
            <div class="form-group">
                <label for="q18">Where do you prefer to live?</label><br>
                <input type="radio" name="q18" value="farm"> On a farm<br>
                <img src="./images/farm.png" width = '350' height = '200'><br><br>
                <input type="radio" name="q18" value="suburb"> A nice suburban neighborhood<br>
                <img src="./images/suburb.png" width = '350' height = '200'><br><br>
                <input type="radio" name="q18" value="city"> Right in the heart of a city<br>
                <img src="./images/city.png" width = '350' height = '200'><br><br>
                <input type="radio" name="q18" value="beach"> By the beach<br>
                <img src="./images/beach.png" width = '350' height = '200'><br>
            </div>
            </li>


            <li>
            <div class="form-group">
                <label for="q19">How would you describe yourself?</label><br>
                <input type="radio" name="q19" value="family"> Family Oriented<br>
                <input type="radio" name="q19" value="independent"> Independent<br>
                <input type="radio" name="q19" value="ambitious"> Outgoing<br>
                <input type="radio" name="q19" value="chill"> Chill<br>
                <input type="radio" name="q19" value="adventure"> Adventurous<br>
                <input type="radio" name="q19" value="adventure"> Compassionate<br>
            </div>
            </li>

            <li>
            <div class="form-group" style="width:450px">
                <label for="q20">Your drink of choice is:</label><br>

                <div style="display: in-line; width:150px; float:left; margin:10px;">
                    <input type="radio" name="q20" value="coffee"> Coffee<br>
                    <img src="./images/coffee.png" width = '150' height = '150'>
                </div>
                <div style="display: in-line; width:150px; float:left; margin:10px;">
                    <input type="radio" name="q20" value="beer"> Beer<br>
                    <img src="./images/beer.png" width = '150' height = '150'>
                </div>
                <div style="display: in-line; width:150px; float:left; margin:10px;">
                    <input type="radio" name="q20" value="soda"> Soda<br>
                    <img src="./images/soda.png" width = '150' height = '150'>
                </div>
                <div style="display: in-line; width:150px; float:left; margin:10px;">
                    <input type="radio" name="q20" value="water"> Water<br>
                    <img src="./images/water.png" width = '150' height = '150'>
                </div>
                <div style="display: in-line; width:150px; float:left; margin:10px;">
                    <input type="radio" name="q20" value="wine"> Wine<br>
                    <img src="./images/wine.png" width = '150' height = '150'>
                </div>
                <div style="display: in-line; width:150px; float:left; margin:10px;">
                    <input type="radio" name="q20" value="juice"> Juice<br>
                    <img src="./images/juice.png" width = '150' height = '150'><br>
                </div>
               
            </div>
            </li>

        </ol>

        <div class="button-group" id = "buttonContainer">
            <input type="submit" class="btn btn-info" value="Save Preferences" 
            style="width:70%;
                height: 40px;
                position:fixed;
                bottom:0px;
                text-align:center;
                left: 15%;
                font-size:16pt;
            ">
        </div>
    </form>
</div>
<br><br><br>
</body>
</html>