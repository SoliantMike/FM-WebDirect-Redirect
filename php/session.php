<?php

/*
 * save parameter as session variable
 * 
 * @author Mike Duncan
 * @copyright 2019-01-18
 * 
 */
ini_set('log_errors', 0);
ini_set('display_errors',1);

// instantiate session
session_start();

// set session variable from request parameter
$_SESSION['homeurl'] = $_REQUEST['homeurl'];

#eof
