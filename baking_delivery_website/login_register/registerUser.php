<?php

//Make connection to database
include '../connection.php';

// reset the register variable
unset($_SESSION['register']);
unset($_SESSION['errors']);

//array for error feedback
$errors=array();

//array for user data persistence between page reloads
$persist=array();

//Gather from $_POST[]all the data submitted and store in variables
//calls test_input on all submitted data
//saves errors to the array when detected
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   if (empty($_POST["txtName"])) {
    $errors['Name'] = "Name is required";
  } else {
    $Name = test_input($_POST["txtName"]);
    // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Name)){
            $errors['Name'] = "Only letters and white space allowed";
        }
        if(strlen($Name)<2){
            $errors['Name'] = "Name must be at least 2 characters";
        }
    }
    
    
   
    
     if (empty($_POST["txtAddress"])) {
    $errors['address'] = "Address is required";
  } else {
    $address = test_input($_POST["txtAddress"]);
    // checks go here
       
    }
    
    
      if (empty($_POST["txtEmail"])) {
    $errors['email'] = "Email is required";
  } else {
    $email = test_input($_POST["txtEmail"]);
    // check if e-mail address is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "Invalid email format";
    }
  } 
  
  
    if (empty($_POST["txtPass"])) {
    $errors['pass'] = "Password is required";
  } else {
    $passtest = test_input($_POST["txtPass"]);
    // check if name only contains letters and whitespace
    if (strlen($passtest) <=8 ){
      $errors['pass'] = "Password must be over 8 characters long";
    } elseif (!preg_match("#[0-9]+#",$passtest)){
        $errors['pass'] = "Password must contain a number";
    } elseif (!preg_match("#[A-Z]+#",$passtest)){
        $errors['pass']= "Password must contain a capital letter";
    } else if (!preg_match("#[a-z]+#",$passtest)){
        $errors['pass']= "Password must contain a lowercase letter";
        
    } else {
        //encrypts the new password 
        $pass = password_hash($passtest, PASSWORD_DEFAULT);
    }
  } 
  if (empty($_POST["txtPhone"])) {
    $errors['phone'] = "Phone Number is required";
  } else {
    $phone = $_POST["txtPhone"];
    // check if phone only contains only numnbers
     }
    

    
} else {
    //notihng
}
    
 //function to test input data for special characters
function test_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

//save form data for persistance
$persist['Name']=$Name;;
$persist['address']=$address;
$persist['email']=$email;
$persist['phone']=$phone;


$_SESSION['persist']=$persist;
   
//INSERT query using variables holding data gathered
//if to check there are not errors in the form before building query

if (!empty($errors)){
    $_SESSION['errors']=$errors;
    $_SESSION['register']= "Unable to register user";
    header("Location: {$_SERVER['HTTP_REFERER']}");
    } else{
    $query="INSERT INTO Users 
                (UserID,Name,Address,Email,Phone,Password) 
            VALUES 
                (NULL,'$Name','$address','$email','$phone','$pass')"; 

//echo $query;
//echo exit; 
     
   if(mysqli_query($connection, $query)){

//clear form persisit
unset($_SESSION['persist']);


//feedback to user on success or failure
 $_SESSION['register']= "Thank you ".$Name. ", you are registered";

} else{

$_SESSION['register']= "Unable to register new user";
}
}

//return to calling page

header("Location: {$_SERVER['HTTP_REFERER']}");

?>

