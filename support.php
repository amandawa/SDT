<?php

function generatePage($body, $title="SDT") {
    $page = <<<EOPAGE
<!doctype html>
<html>
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>$title</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css" />	
    </head>
            
    <body>
        <fieldset class="reg_container">
          $body
        </fieldset>
    </body>
</html>
EOPAGE;
    return $page;
}
?>