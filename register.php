<?php
error_reporting(E_ERROR);
require_once('support.php');
session_start();
$msg = "";

if (isset($_GET['submitReg'])) {
    $login_nm = $_GET["usr"];
    $login_passwd = $_GET["pwd"];

    /* Establish a connection to the LDAP server */
    $ldapconn=ldap_connect("ldap://ldap.umd.edu/",389) or die('Could not connect<br>');

    /* Set the protocol version to 3 (unless set to 3 by default) */
    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);

    /* Bind user to LDAP with password */
    $verify_user=ldap_bind($ldapconn,"uid=$login_nm,ou=people,dc=umd,dc=edu",$login_passwd);
    /* Returns 1 on Success */
    if ($verify_user != 1) {
        /* Failed */
        $msg .= "<br><label style='color: red;'>Invalid Directory ID/Password</label>";
    } else {
        $_SESSION["usr"] = $login_nm;
        $_SESSION["pwd"] = $login_passwd;
        $_SESSION["email"] = $_GET["email"];
        $_SESSION["phone"] = $_GET["phone"];
        header('location:preferences/Preferences.php');
    }
    // Release connection
    ldap_unbind($ldapconn);
}
$body = <<<EOBODY
    <form action="{$_SERVER['PHP_SELF']}" method="get">
        <h2>Sign Up !</h2><br>
        <div class="form-group">
            <label for="usr">UMD Directory ID:</label>
            <input type="text" class="form-control" name="usr" id="usr" placeholder="i.e. lemondog123" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" id="pwd" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="umd@connect.com" required>
        </div>
        <div class="form-group">
            <label>Phone Number:</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="XXX-XXX-XXXX" required>
        </div>
        <br>
        <button type="submit" name="submitReg" class="btn btn-default">Submit</button>
    </form>
EOBODY;
$page = $body.$msg;
    echo generatePage($page, "New User");
?>