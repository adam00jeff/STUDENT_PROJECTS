<?php

//Make connection to database
include 'connection.php';
//Gather from $_POST[]all the data submitted and store in variables
if (isset($_POST['subProduct'])) {
    $text = $_POST['txtName'];
    $price = $_POST['numPrice'];
    $image = $_POST['txtImageName'];
    }
//Construct INSERT query using variables holding data gathered

$query="INSERT INTO products 
(ProductName,ProductPrice,ProductImageName) 
VALUES 
('$text', '$price', '$image')";

//Temporarily echo $query for debugging purposes
//echo $query;
///exit();

//run $query

mysqli_query($connection, $query);

// Further Testing:
//if(mysqli_query($connection, $query)){
//echo "Record inserted successfully.";
//} else{
//echo "ERROR: Could not execute $sql. " . mysqli_error($connection);
//}

//return to calling page(stored in the server variables)

header("Location: {$_SERVER['HTTP_REFERER']}");

?>