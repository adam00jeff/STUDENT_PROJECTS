<?php

session_start();

// removes all session data
session_destroy();

//redirects back to calling page
header("Location: {$_SERVER['HTTP_REFERER']}")

?>
