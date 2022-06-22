<?php

//Make connection to database
include '../connection.php';
//Gather from $_POST[]all the data submitted and store in variables
if (isset($_POST['subProduct'])) {
    $baker = $_POST['txtBakerId'];
    $name = $_POST['txtName'];
    $quantity = $_POST['numQuantity'];
    $price = $_POST['numPrice'];
    $desc = $_POST['txtProductDesc'];
    $ingredients = $_POST['txtIngredients'];
    $allergens = $_POST['txtAllergens'];
    $image = $_POST['txtImageName'];
    }
//Construct INSERT query using variables holding data gathered

$query="INSERT INTO Products 
(ProductID,BakerID,Prod_Name,Price,Quantity,Prod_desc,Ingredients,Allergens,Prod_Image)
VALUES 
(NULL,'$baker','$name','$quantity','$price','$desc','$ingredients','$allergens','$image')";

//Temporarily echo $query for debugging purposes
//echo $query;
//echo exit();

//run $query

mysqli_query($connection, $query);

// Further Testing:
//if(mysqli_query($connection, $query)){
///echo "Record inserted successfully.";
//} else{
//echo "ERROR: Could not execute $sql. " . mysqli_error($connection);
//}

//return to calling page(stored in the server variables)

header("Location: {$_SERVER['HTTP_REFERER']}");

?>