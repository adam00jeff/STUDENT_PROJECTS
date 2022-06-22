<?php

//include connection
include '../connection.php';

//Gather details submitted from the $_POST array and store in local variables
$email=$_POST['txtEmail'];
$pass=$_POST['txtPass'];

// query to get user data and password hash
$query="SELECT * FROM Users 
    WHERE 
    email = '$email'";
    
//run query and store result
$result=mysqli_query($connection, $query);

//tests password hash
//creates a user in $_SESSION if recognised
//creates an 'error' in $_SESSION if not
//redirects back to sortSearch page
if ($row = mysqli_fetch_assoc($result)) {
    if (password_verify($pass, $row['Password'])){
    $_SESSION['user_id']=$row['UserID'];
    $_SESSION['user']=$row['Name'];
    header ("Location: {$_SERVER['HTTP_REFERER']}"); 
}else {
    header ("Location: {$_SERVER['HTTP_REFERER']}");
    $_SESSION['loginError']= 'Invalid Password';
}

} else {
    $_SESSION['loginError']= 'User not recognised';
    header ("Location: {$_SERVER['HTTP_REFERER']}");
}

?>