<?php

/*
 * redirect to webd with homeurl and parameter
 * 
 * @author Mike Duncan
 * @copyright 2019-01-18
 * 
 */
ini_set('log_errors', 0);
ini_set('display_errors',1);

// set variables as needed
$fm_file = "WebDirect_Demo";
$param = $_REQUEST['param'];
$homeurl = "/out.php";

// build the string for the URL to use
$my_url = '/fmi/webd/' . $fm_file . '?script=Pass&param=' . $param . '&homeurl=' . $homeurl . '';

// do the redirect
header('Location: ' . $my_url );

#eof
