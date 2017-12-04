<?php
    require_once("fun_tuna.php");

    if (isset($_GET["login"])) {
        $usr = $_GET["usr"];
        $pwd = $_GET["pwd"];
        $user = new fun_tuna();
        $info = $user->getInfo($usr);

        if ($info["UID"] == $usr and $pwd["pwd"] == $pwd) {
            $_SESSION['usr'] = $usr;
            header('location:profile/Profile.php');
        }
    } else {
        //TODO: or else
    }