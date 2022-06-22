<?php

//Make connection to database
include 'connection.php';
//Gather data sent from amendProducts.php page
$id=$_POST['hideProductID'];
$name=$_POST['txtprodName'];
$price=$_POST['numprodPrice'];
$image=$_POST['txtImageprodName'];
//Produce an update query to update product record for the id provided
$query="
    UPDATE products 
    SET 
    ProductName='$name', 
    ProductPrice='$price', 
    ProductImageName='$image' 
    WHERE 
    ProductID='$id'";
//Temporarily echo $query for debugging purposes
//echo $query;
//exit();

//run $query
//run query
mysqli_query($connection, $query);

//Redirect to crud.php page

header( 'Location: crud.php' ) ;

?>

