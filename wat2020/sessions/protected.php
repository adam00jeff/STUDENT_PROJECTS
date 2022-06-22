<?php

include 'init.php';

if(!isset($_SESSION['user'])){

header ('location:sessions.php');

}

?> <p>This is an example of a protected page</p>

<a href="logout.php">Logout Page</a>