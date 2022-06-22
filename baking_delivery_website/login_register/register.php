<?php include '../connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../newstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&Muli:wght@300&family=Oswald&family=Anton&display=swap" rel="stylesheet">
		<title>Register</title>
	</head>
	<body style="background:url(images/background1.jpg); background-size: 100px 100px; background-attachment:fixed;">
        
<!--- Navigation bar top-->       
        <div class="container">
        
            <div class="header">
                <img src="../images/logo.png" alt="logo" height="100%" style="margin-left:45%;">
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
<!--
simple form to capture new user data
-->
<div class="main">
<form class="register" method="post" action="registerUser.php" autocomplete="on">
   <fieldset>
        <legend>Enter User Details: </legend><br>
        <label for="Name">Name:</label><br>
            <input type="text" name="txtName"txtFName" value="<?php
            if(isset($_SESSION['persist']['Name'])){
                echo $_SESSION['persist']['Name'];
            }
            ?>" />
            <span>
            <?php
            if(isset($_SESSION['errors']['Name'])){
                echo $_SESSION['errors']['Name'];
            }
            ?>       
            </span><br>
                   
        <label for="address">Address:</label><br>
            <input type="text" name="txtAddress" id="txtAddress" value="<?php
            if(isset($_SESSION['persist']['address'])){
                echo $_SESSION['persist']['address'];
            }
            ?>" />
            <span>
            <?php
            if(isset($_SESSION['errors']['address'])){
                echo $_SESSION['errors']['address'];
            }
            ?>       
            </span><br>
            
        <label for="txtEmail">Email:</label><br>
            <input type="text" name="txtEmail" id="txtEmail"  value="<?php
            if(isset($_SESSION['persist']['email'])){
                echo $_SESSION['persist']['email'];
            }
            ?>" /><span>
             <?php
            if(isset($_SESSION['errors']['email'])){
                echo $_SESSION['errors']['email'];
            }
            ?>       
            </span><br>
                              
        <label for="txtPhone">Phone:</label><br>
            <input type="number" name="txtPhone" id="txtPhone" value="<?php
            if(isset($_SESSION['persist']['phone'])){
                echo $_SESSION['persist']['phone'];
            }
            ?>" />
            <span>
            <?php
            if(isset($_SESSION['errors']['phone'])){
                echo $_SESSION['errors']['phone'];
            }
            ?>       
            
            </span><br>
            <label for="txtPassword">Password:</label><br> 
            <input  type="password" name="txtPass" id="txtPass"   value="" /><span>
                     <?php
            if(isset($_SESSION['errors']['pass'])){
                echo $_SESSION['errors']['pass'];
            }
            ?>       
            </span><br>
        
        <br>         
    </fieldset>    
    <input type="submit" value="Submit" name="subUser"/>
    
    <input type ="button" onclick="location.href='clearForm.php';" value="Clear"/>
    
</form>

<?php
if(isset($_SESSION['register'])){
    echo $_SESSION['register'];
} 
?>
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
