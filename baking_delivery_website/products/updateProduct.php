<?php

//Make connection to database
include '../connection.php';
//Gather data sent from amendProducts.php page
$id=$_POST['hideProductID'];
$baker = $_POST['txtBakerId'];
$name = $_POST['txtName'];
$quantity = $_POST['numQuantity'];
$price = $_POST['numPrice'];
$desc = $_POST['txtProductDesc'];
$ingredients = $_POST['txtIngredients'];
$allergens = $_POST['txtAllergens'];
$image = $_POST['txtImageName'];
//Produce an update query to update product record for the id provided
$query="
    UPDATE Products 
    SET 
    BakerID='$baker',
    Prod_Name='$name',
    Price='$price',
    Quantity='$quantity',
    Prod_desc='$desc',
    Ingredients='$ingredients',
    Allergens='$allergens',
    Prod_Image='$image'
    WHERE 
    ProductID='$id'";
//Temporarily echo $query for debugging purposes
//echo $query;
//exit();

//run $query

mysqli_query($connection, $query);

//returns back to calling page
header("Location: {$_SERVER['HTTP_REFERER']}");

?>

