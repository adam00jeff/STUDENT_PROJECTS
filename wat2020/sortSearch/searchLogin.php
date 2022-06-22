<?php

//include init.php
include 'init.php';

//Gather details submitted from the $_POST array and store in local variables
$user=$_POST['txtUser'];
$pass=$_POST['txtPass'];

// query to get user data and password hash
$query="SELECT * FROM users 
    WHERE 
    username = '$user'";
    
//run query and store result
$result=mysqli_query($connection, $query);

//tests password hash
//creates a user in $_SESSION if recognised
//creates an 'error' in $_SESSION if not
//redirects back to sortSearch page
if ($row = mysqli_fetch_assoc($result)) {
    if (password_verify($pass, $row['password'])){
    $_SESSION['searchUser']=$user;
    header ("Location: {$_SERVER['HTTP_REFERER']}"); 
}else {
    $_SESSION['loginError']= 'Invalid Password';
}

} else {
    $_SESSION['loginError']= 'User not recognised';
    header ("Location: {$_SERVER['HTTP_REFERER']}");
}

?>