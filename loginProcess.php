<?php

/* You need to update http.conf file so the ldap module is loaded */
/* Entry in http.conf: LoadModule ldap_module modules/mod_ldap.so */

/* Setup Env if needed (OSX):                                     */
/* 1: Check which php path:                                       */
/*    $root: which php                                            */
/* 2: Check if path = /usr/bin/php, change your OSX php path:     */
/*    $root: PATH="/Applications/XAMPP/xamppfiles/bin:${PATH}"    */
/* 3: Install icu4c:                                              */
/*    $root: brew install icu4c                                   */
/* 4: Install autoconf if needed:                                 */
/*    $root: brew install autoconf                                */
/* 5: Install Intl via PECL:                                      */
/*    $root: sudo pecl update-channels                            */
/*    $root: sudo pecl install intl                               */
/* 6: Add extension=php_ldap.dll in /xamppfiles/etc/php.intl      */
/* 7: Entry in httpd.conf @ xamppfiles/apache2/conf/              */
/*    LoadModule ldap_module modules/mod_ldap.so                  */
/* 8: Restart Xampp                                               */
/* Reference: "https://stackoverflow.com/questions/27886117/php-intl-installation-on-xampp/32404183#32404183" */

$login_nm = $_GET["usr"];
$login_passwd = $_GET["pwd"];

/* TODO: check database if account created */
/* Establish a connection to the LDAP server */
$ldapconn=ldap_connect("ldap://ldap.umd.edu/",389) or die('Could not connect<br>');

/* Set the protocol version to 3 (unless set to 3 by default) */
ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);

/* Bind user to LDAP with password */
$verify_user=ldap_bind($ldapconn,"uid=$login_nm,ou=people,dc=umd,dc=edu",$login_passwd);

/* Returns 1 on Success */
if ($verify_user != 1) {
    /* Failed */
    echo "Invalid directoryId/password<br>";
} else {
    /* Success */
    /* TODO: relocation */
    echo "You have been authenticated as having a valid UMD directory ID.";
}

// Release connection
ldap_unbind($ldapconn);