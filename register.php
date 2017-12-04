<?php
error_reporting(E_ERROR);
require_once('support.php');
require_once('fun_tuna.php');
session_start();
$msg = "";

if (isset($_POST['submitReg'])) {

    $login_nm = $_POST["usr"];
    $login_passwd = $_POST["pwd"];

    /* Establish a connection to the LDAP server */
    $ldapconn=ldap_connect("ldap://ldap.umd.edu/",389) or die('Could not connect<br>');

    /* Set the protocol version to 3 (unless set to 3 by default) */
    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);

    /* Bind user to LDAP with password */
    $verify_user=ldap_bind($ldapconn,"uid=$login_nm,ou=people,dc=umd,dc=edu",$login_passwd);
    /* Returns 1 on Success */
    if ($verify_user != 1) {
        /* Failed */
        $msg .= "<label style='color: red;'>Invalid Directory ID/Password</label><br>";
    } else {
        $user = new fun_tuna();
        $info = $user->getInfo($login_nm);
        if (count($info) === 0) {
            $ss = "\"";
            $_SESSION["usr"] = $login_nm;
            $_SESSION["pwd"] = $login_passwd;
            $arr = array($ss.$login_nm.$ss, $ss.$login_passwd.$ss, $ss.$_POST["firstname"].$ss, $ss.$_POST["lastname"].$ss,
                $ss.$_POST["email"].$ss, $ss.$login_nm.$ss, $ss.$_POST["phone"].$ss, $ss."null".$ss, $ss.$_POST["gender"].$ss, $ss.$_POST["major"].$ss,
                $ss.$_POST["birthday"].$ss, $ss.$_POST["ethnicity"].$ss, $ss."null".$ss, $ss."null".$ss, $ss."null".$ss, $ss."null".$ss,
                $ss."null".$ss, $ss."null".$ss, $ss."null".$ss, $ss."null".$ss, $ss."null".$ss, $ss."null".$ss, $ss."null".$ss);
            $input = serialize($arr);
            $user->insert($input);
            header('location:preferences/Preferences.php');
        } else {
            $msg .= "<label style='color: red;'>Account Already Exists</label><br>";
        }

    }
    // Release connection
    ldap_unbind($ldapconn);

}
$body = <<<EOBODY
    <form action="{$_SERVER['PHP_SELF']}" method="post">
        <h2>Sign Up Now !</h2><br>
        <div class="form-group">
            <label for="usr">UMD Directory ID:</label>
            <input type="text" class="form-control" name="usr" id="usr" placeholder="i.e. lemondog123" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" id="pwd" required placeholder="*****">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="umd@connect.com" >
        </div>
        <div class="form-group">
            <label>Phone Number:</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="XXX-XXX-XXXX" >
        </div>
        <div class="form-group">
            <label for="pwd">First Name:</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="John">
        </div>
        <div class="form-group">
            <label for="email">Last Name:</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Smith">
        </div>
        <div class="form-group">
            <label>Gender:</label>
            <input type="text" class="form-control" name="gender" id="gender" placeholder="M/F" >
        <div class="form-group">
            <label>Major:</label>
            <input type="text" class="form-control" name="major" id="major" placeholder="CS">
        </div>
        <div class="form-group">
            <label>Birthday:</label>
            <input type="text" class="form-control" name="birthday" id="birthday" placeholder="i.e. 01/01/2017">
        </div>
        <div class="form-group">
            <label>Ethnicity:</label>
            <input type="text" class="form-control" name="ethnicity" id="ethnicity" placeholder="i.e. Asian">
        </div>
        <br>
        <input type="submit" name="submitReg" class="btn btn-default" value="Submit">
        <br><br>
    </form>

EOBODY;
    $page = $body.$msg;
    echo generatePage($page, "New User");
?>