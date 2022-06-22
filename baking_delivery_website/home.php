<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="newstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&Muli:wght@300&family=Oswald&family=Anton&display=swap" rel="stylesheet">
		<title>Home</title>
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
include 'connection.php';

include 'search_sort/home_select.php';



?>
<form class="filter" method="post">

    <fieldset>
                <legend>Search Options</legend><br>
                    <label for="search">Search: </label>
                    <input type="text" name="txtSearch" value="<?php if(isset($_POST['txtSearch'])){echo $_POST['txtSearch'];}?>" /><br>
                    
                    <label for="radOrder">Order By:</label>
                    <input type="radio" id="a-z" name="radOrder"<?php if(isset($_POST['radOrder'])&&$_POST['radOrder']=="a-z") echo "checked";?> value="a-z">
                    <label for="radA-Z">A-Z</label>
                    <input type="radio" id="price" name="radOrder"<?php if(isset($_POST['radOrder'])&&$_POST['radOrder']=="price") echo "checked";?> value="price">
                    <label for="radPrice">Price</label><br><br>
                    
                    <label for="allergens">Avoid Allergens:</label><br>
                        <input type="checkbox" name="dairy" <?php if(isset($_POST['dairy'])) echo "checked";?> value="Dairy">
                        <label for="dairy">Dairy</label><br>
                        <input type="checkbox" name="gluten" <?php if(isset($_POST['gluten'])) echo "checked";?> value="Gluten">
                        <label for="gluten">Gluten</label><br>
                        <input type="checkbox" name="soy" <?php if(isset($_POST['soy'])) echo "checked";?> value="Soy">
                        <label for="soy">Soy</label><br>
                    
            </fieldset>
            <input type="submit" value="Submit" name="searchSubmit"/>
            <input type ="button" onclick="location.href='search_sort/searchClear.php';" value="Clear"/>
        </form>
            
            
            
 <div class="main" id="store">
    <h1>Granny's Bakes</h1>
        <hr class="store">
                
                
    <ul class="item-list">
           
        <?php 
        if (isset($_POST['searchSubmit'])){
            include 'search_sort/search_query.php';
        }else{

        include 'search_sort/home_display_all.php'; 
        }
        
        if (isset($_GET['prodid'])){
            $id =$_GET['prodid'];
            $_SESSION['quantity'][]=$id;
           

         $_SESSION['cart'][] = $_GET['prodid'];
         }
     

        
        ?>


        
            <hr class="store">
            <div class="checkout">
                <button class="checkout"onclick="location.href='order.php';">Checkout 
              </button>

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
                <p>&copy; Granny's bakes.
                24 make belive drive
                Leeds LS6 4FF UK</p>    
            </div>
        </div>
        </div>
        <script src="scripts/main.js"></script>
	</body>
</html>
