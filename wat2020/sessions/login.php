<?php

//include init.php
include 'init.php';
//Gather details submitted from the $_POST array and store in local vars
$user=$_POST['txtUser'];
$pass=$_POST['txtPass'];
//build query to SELECT records from the users table WHERE
//the username AND password in the table are equal to those entered.
$query="SELECT * FROM simpleusers 
    WHERE 
    username = '$user' 
    AND 
    password = '$pass'";
//run query and store result
$result=mysqli_query($connection, $query);

//testing for query
//$row=mysqli_fetch_assoc($result);
//Print_r($row);
//exit();

//creates a user in $_SESSION if recognised
//creates an 'error' in $_SESSION if not
if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['user']=$user;
    header ('location:sessions.php'); // relocated back to sessions.php
} else {
    $_SESSION['error']= 'User not recognised';
    header ('location: sessions.php');
}

?>