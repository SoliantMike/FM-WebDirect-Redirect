<?php

/*
 * redirect to homeurl saved in session variable
 * 
 * @author Mike Duncan
 * @copyright 2019-01-18
 * 
 */
ini_set('log_errors', 0);
ini_set('display_errors',1);

// instantiate session
session_start();

// check for session variable
if(isset($_SESSION['homeurl']) && strlen($_SESSION['homeurl']) > 0){
    $homeurl = $_SESSION['homeurl'];
} else {
    //if none set, send back to webdirect home by default
    $homeurl = '/fmi/webd';
}

// do the redirect
header('Location: ' . $homeurl );

// clean up the session
session_destroy();

#eof
