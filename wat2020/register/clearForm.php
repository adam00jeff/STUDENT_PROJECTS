<?php
// simple page to unset sessions and refresh form
// does not destroy $_Session() to not affect other pages
// redirects back to calling page
include 'init.php';
unset($_SESSION['persist']);
unset($_SESSION['errors']);
unset($_SESSION['register']);
header("Location: {$_SERVER['HTTP_REFERER']}");