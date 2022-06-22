<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="newstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&Muli:wght@300&family=Oswald&family=Anton&display=swap" rel="stylesheet">
		<title>Product</title>
	</head>
	<body style="background:url(images/background1.jpg); background-size: 100px 100px; background-attachment:fixed;">
        
<!--- Navigation bar top-->       
        <div class="container">
        
            <div class="header">
                <img src="images/logo.png" alt="logo" height="100%" style="margin-left:45%;">
            </div>
            <nav>
            <div class="navbar">          
            <a class="navbutton" href="home.php">Home</a            
            ><a class="navbutton" href="about.php">About</a
            ><a class="navbutton" id="active" href="bakers.php">Our Bakers</a
            ><a class="navbutton" id="active" href="order.php">Your Order</a
            >
            <div class="account-dropdown">
                <button class="dropbtn">Account</button>
				<div class="dropdown-content">
					<a href="login_register/login.php">Sign in</a>
					<a href="login_register/register.php">Register</a>
				</div>
            </div>
            </div>
            
            </nav>
<!-- Main page Content-->
<!--phpselect-->
<?php
//Make connection to database
include 'connection.php';
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


            <div style="width:100%; height:auto; grid-area:main; padding: 80px 0 80px 0;">
                <div class="product">
                    <h1 class="product-name"><?php echo $row['Prod_Name']; ?></h1>
                    <p class="product-description"> <?php echo $row['Prod_Desc'];?></p>
                    <h2 class="allergens">Allergens:<?php echo $row['Allergens'];?> </h2>
                    <section class="left">
                        <img src="products/product_images/<?php echo $row['Prod_Image'];?>" style="float:right;">
                    </section>
                    <section class="right"> 
                        <div class="buy-product">
                            <label style="display:block; font-size:22px; margin-left:25%; margin-bottom: 4%;">Price:<?php echo $row['Price'];?></label>

                            <button class="checkout" style="margin-left: 40%; margin-top: 5%;">Checkout</button>
                        </div>
                    </section>
                </div>
            </div>
            
                
                <div class="footer">
                    <div style="background-color: white;">
                    <div class="media">                       
                            <a href="www.google.com">
                                <img alt="instagram" class="smb" src="images/instagram.png">
                            </a>                        
                                <a href="www.google.com">          
                             <img alt="facebook" class="smb" src="images/facebook.png">         
                                </a>                                              
                                <a href="www.google.com">
                                <img alt="snapchat" class="smb" src="images/snapchat.png">
                            </a>                
                        </div>
                    <br>            
                </div>
                <div class="footer-content">
                    
                    <ul class="footer-header">
                        <li><h3>Products</h3>
                            <ul>
                                <li>
                                    <a href="#">Pre-owned</a>
                                </li>
                                <li>
                                    <a href="#">Coming Soon</a>
                                </li>
                                <li>
                                    <a href="#">Marketplace</a>
                                </li>
                                <li>
                                    <a href="#">Accessories</a>
                                </li>
                            </ul>
                        </li>                    
                        <li><h3>Customer Services</h3>
                            <ul>
                                <li>
                                    <a href="#">Help Home</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Deliveries</a>
                                </li>
                                <li>
                                    <a href="#">Returns information</a>
                                </li>
                            </ul>
                        </li>
                        <li><h3>About</h3>
                            <ul>
                                <li>
                                    <a href="#">Sustainability</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                </li>
                                <li>
                                    <a href="#">Careers</a>
                                </li>
                            </ul>
                        </li>
                        <li><h3>Legal</h3>
                            <ul>
                                <li>
                                    <a href="#">Privacy</a>
                                </li>
                                <li>
                                    <a href="#">Terms &#38; conditions</a>
                                </li>
                                <li>
                                    <a href="#">Accessibility</a>
                                </li>
                                <li>
                                    <a href="#">Cookies</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
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
