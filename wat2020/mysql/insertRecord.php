<?php

//Make connection to database

include 'connection.php';

//(a)Gather from $_POST[]all the data submitted and store in variables
// has the form been submitted?
if (isset($_POST['subCustomer'])){
    $fName=$_POST['txtFName'];
    $sName=$_POST['txtSName'];
    $email=$_POST['txtEmail'];
    $password=$_POST['txtPassword'];
    $gender=$_POST['selGender'];
    $age=$_POST['txtAge'];
    
}else{
    //do nothing
}


//(b)Construct INSERT query using variables holding data gathered

$query="INSERT INTO Customer 
(FirstName,LastName,Email,Password,Gender,Age) 
VALUES 
('$fName', '$sName', '$email','$password','$gender','$age')";



//Temporarily echo $query for debugging purposes
/* 
*echo $query;
*exit();
*/

//run $query

mysqli_query($connection, $query);

/* code to report succesful insertion if required
if(mysqli_query($connection, $query)){

echo "Record inserted successfully.";

} else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
*/
//header call to relocate
header('location:mysql.php');

?>
