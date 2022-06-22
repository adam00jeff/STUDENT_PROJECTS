<?php

//Set up the database access credentials

$hostname = 'stu-db.aet.leedsbeckett.ac.uk';

$username = 'c3263312'; //your standard uni id

$password = 'MyDB41219340'; // the password found on the W: drive

$databaseName = 'c3263312-dev-2'; //the name of the db you are using on phpMyAdmin

$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");

?>