<?php
//Make connection to database
include 'connection.php';
//Gather id sent from crud.php page
$id = $_GET['prodid'];
//Produce query to select the product record for the id provided
$query="SELECT * FROM products WHERE ProductID = '$id'";
//run query and store result
$result=mysqli_query($connection, $query);
//extract row from result using mysqli_fetch_assoc()and store $row
$row=mysqli_fetch_assoc($result);
//Print_r($row);
//exit();
?>

<form method="post" action="updateProduct.php">
    <fieldset>
        <legend>Amend Product Details</legend>
            <input type="hidden" name="hideProductID" value="<?php echo $row['ProductID']; ?>" />
            <label for ="txtprodName">Product Name</label>
            <input type="text" name="txtprodName" value="<?php echo $row['ProductName']; ?>"/><br>
            <label for ="numprodPrice">Product Price</label>
            <input type="number" name="numprodPrice" id="numPrice" min="0.00" max="10000.00" step="0.01" value="<?php echo $row['ProductPrice']; ?>"/><br>
            <label for="ImageFileName">Image File Name:</label>
            <input type="text" name="txtImageprodName" id="txtImageName" value="<?php echo $row['ProductImageName']; ?>"><br>
            <input type="submit" value="Amend" name="subAmend"/>
            <input type="reset" value="Clear" />
        
    </fieldset>    
</form>