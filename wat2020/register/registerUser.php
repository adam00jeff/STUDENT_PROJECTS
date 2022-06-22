<?php
//Make connection to database
include 'init.php';

// reset the register variable
unset($_SESSION['register']);
unset($_SESSION['feedback']);
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
    $errors['name'] = "Name is required";
  } else {
    $name = test_input($_POST["txtName"]);
    // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $errors['name'] = "Only letters and white space allowed";
        }
        if(strlen($name)<5){
            $errors['name'] = "Username must be at least 6 characters";
        }
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
  
    if (empty($_POST['selAge'])){
        $errors['age'] = "Age is required";
    } else {
        $age = test_input($_POST['selAge']);
    }
    
    if(isset($_POST['chkTerms'])){
        $chk = true;
    } else {
        $errors['chk'] = "Please agree to continue";
    }
}
   
//function to test input data for special characters
function test_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

//save form data for persistance
$persist['name']=$name;
$persist['email']=$email;
$persist['age']=$age;
$persist['chk']=$chk;

$_SESSION['persist']=$persist;

       
//INSERT query using variables holding data gathered
//if to check there are not errors in the form before building query

if (!empty($errors)){
    $_SESSION['errors']=$errors;
    $_SESSION['register']= "Unable to register user";
    header("Location: {$_SERVER['HTTP_REFERER']}");
    } else{
    $query="INSERT INTO users 
        (username,email,age,password) 
        VALUES 
        ('$name', '$email', '$age','$pass')"; 
     
   if(mysqli_query($connection, $query)){

//clear form persisit
unset($_SESSION['persist']);

//feedback to user on success or failure
 $_SESSION['register']= "Thank you ".$name. ", you are registered";

} else{

$_SESSION['register']= "Unable to register new user";
}
}

//return to calling page

header("Location: {$_SERVER['HTTP_REFERER']}");

?>

