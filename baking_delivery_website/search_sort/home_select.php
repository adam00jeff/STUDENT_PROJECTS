
<?php

include '../connection.php';
//run query to select all records from products table

$query="SELECT * FROM Products";

//store the result of the query in a variable called $result

$result=mysqli_query($connection, $query);

//sets a single digit ref number for products
$productref = 0;

//creates an array to store products
$products = array();

//initiates a loop of products table
while ($row=mysqli_fetch_assoc($result)){

    //save current row to temporary associative array
    $thisRow = array("Product_ID"=>$row['ProductID'],
                    "Baker_ID"=>$row['BakerID'],
                    "Prod_Name"=>$row['Prod_Name'],
                    "Prod_Price"=>$row['Price'],
                    "Quantity"=>$row['Quantity'],
                    "Prod_Desc"=>$row['Prod_Desc'],
                    "Ingredients"=>$row['Ingredients'],
                    "Allergens"=>$row['Allergens'],
                    "Prod_Image"=>$row['Prod_Image']);
    
    //if($row['ProdRef'] != $productref){
       // $productref = $row['ProdRef'];
       
       // }
       
    //assigns each product a single digit internal reference and increments the counter
    $products[$productref] = $thisRow;
    $productref++;

  }
// saves the products into the products SESSION
$_SESSION[products]=$products;

//print_r ($products);