<?php
// simple page to unset sessions and refresh form
// does not destroy $_Session() to not affect other pages
// redirects back to calling page
include 'init.php';
// unset go here

//emptys the $_POST array
$_POST = array();

//returns back to calling page
header("Location: {$_SERVER['HTTP_REFERER']}");
