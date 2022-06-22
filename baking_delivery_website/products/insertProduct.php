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
<!--basic form to enter data into SQL query -->
<br><h3>Insert Product</h3>

<br>
<br>
<form method="post" action="insertProductAction.php">
    <fieldset>
        <legend>Enter New Product Details:</legend>
        <label for="bakerID">Baker ID:</label><br>
        <input type="text" name="txtBakerId" id="txtBakerId"><br>
        <label for="productName">Product Name:</label><br>
        <input type="text" name="txtName" id="txtName"><br>
        <label for="price">Price:</label><br>
        <input type="number" name="numPrice" id="numPrice" min="0.00" max="10000.00" step="0.01" /><br><br>
        <label for="quantity">Quantity:</lavbel><br>
        <input type="number" name="numQuantity" id="numQuantity"><br>
        <label for="productDescription">Product Description</label><br>
        <textarea name="txtProductDesc" id="txtProductDesc" rows"4" cols="50"! value="" /> </textarea><br>
        <label for="ingredients">Ingredients</label><br>
        <textarea name="txtIngredients" is="txtIngredients" rows"4" cols="50"! value="" /> </textarea><br>
        <label for="allergens">Allergens</label><br>
        <input type="text" name="txtAllergens" id="txtAllergens"><br>
        <label for="ImageFileName">Image File Name:</label><br>
        <input type="text" name="txtImageName" id="txtImageName"><br>
        <input type="submit" value="Submit" name="subProduct"/>
        <input type="reset" value="Clear" />
    </fieldset>
</form>
<a href="../login_register/login.php">Back</a>
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