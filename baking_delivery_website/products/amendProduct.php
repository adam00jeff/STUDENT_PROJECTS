<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../newstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&Muli:wght@300&family=Oswald&family=Anton&display=swap" rel="stylesheet">
		<title>Store</title>
	</head>
	<body style="background:url(images/background1.jpg); background-size: 100px 100px; background-attachment:fixed;">
        
<!--- Navigation bar top-->       
        <div class="container">
        
            <div class="header">
            </div>
            <nav>
            <div class="navbar">          
            <a class="navbutton" href="../home.php">Home</a
            
            ><a class="navbutton" href="../about.php">About</a
            ><a class="navbutton" id="active" href="../bakers.php">Our Bakers</a
            ><a class="navbutton" id="active" href="../order.php">Your Order</a
            >
            <div class="account-dropdown">
                <button class="dropbtn">Account</button>
				<div class="dropdown-content">
					<a href="../login_register/login.php">Sign in</a>
					<a href="../login_register/register.php">Register</a>
				</div>
            </div>
            </div>
            
            </nav>
<!--- Main Page content -->
<div style="width:100%; height:auto; grid-area:main; padding: 50px 0 50px 0;">
<div class='product'>
<?php
//Make connection to database
include '../connection.php';
//Gather id sent from crud.php page
$id = $_GET['prodid'];
//Produce query to select the product record for the id provided
$query="SELECT * FROM Products WHERE ProductID = '$id'";
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
            <label for="bakerID">Baker ID:</label><br>
            <input type="text" name="txtBakerId" id="txtBakerId" value="<?php echo $row['BakerID']; ?>"><br>
            <label for="productName">Product Name:</label><br>
            <input type="text" name="txtName" id="txtName"value="<?php echo $row['Prod_Name']; ?>"><br>
            <label for="price">Price:</label><br>
            <input type="number" name="numPrice" id="numPrice" value="<?php echo $row['Price']; ?>"min="0.00" max="10000.00" step="0.01" /><br><br>
            <label for="quantity">Quantity:</lavbel><br>
            <input type="number" name="numQuantity" id="numQuantity"value="<?php echo $row['Quantity']; ?>"><br>
            <label for="productDescription">Product Description</label><br>
            <textarea name="txtProductDesc" id="txtProductDesc" rows"4" cols="50"!><?php echo $row['Prod_Desc']; ?>  </textarea><br>
            <label for="ingredients">Ingredients</label><br>
            <textarea name="txtIngredients" id="txtIngredients" rows"4" cols="50"!><?php echo $row['Ingredients']; ?> </textarea><br>
            <label for="allergens">Allergens</label><br>
            <input type="text" name="txtAllergens" id="txtAllergens"value="<?php echo $row['Allergens']; ?>"><br>
            <label for="ImageFileName">Image File Name:</label><br>
            <input type="text" name="txtImageName" id="txtImageName"value="<?php echo $row['Prod_Image']; ?>"><br>
            <input type="submit" value="Submit" name="subProduct"/>
            <input type="reset" value="Clear" />
            
        
    </fieldset>    
</form>
<a href="../products/selectAll.php">Back</a>
</div>
            </div>
            <div class="footer">
                <div style="background-color: white;">
                
                <br>            
            </div>
            <div class="footer-content">
                
                
            <div class="footer-bottom">
                <p>&copy; 2021 Granny's and co.
                24 make belive drive
                Leeds LS6 4FF UK</p>    
            </div>
        </div>
        </div>
        <script src="scripts/main.js"></script>
	</body>
</html>