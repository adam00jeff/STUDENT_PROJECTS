<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../newstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&Muli:wght@300&family=Oswald&family=Anton&display=swap" rel="stylesheet">
		<title>Login</title>
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
<div class='main'>
<?php
    

include '../connection.php';

//checks for login status
//displays page if found, provides login/register option if not
if(isset($_SESSION['user'])){
    echo '<h2><br><br>Welcome '.$_SESSION['user'].'<br><br></h2>'; 
    if($_SESSION['user_id']<99){
        echo "<h2>Employee Access</h2><br><br>";
        echo "</br></br><a href='../products/selectAll.php'>Show All Products</a><br><br>";
        echo "</br></br><a href='../products/insertProduct.php'>Insert New Product</a><br>";
        echo "</br></br><a href='../users/selectUser.php'>Manage Users</a><br>";
    }
//home
    echo "<br><br><a href='../home.php'>Home</a>";
  
 //logout link, destroys session
    echo "<br><br><small><a href='logout.php'>Logout</a></small>";
                    
    //provides login form if no user found
    //includes any errors in loginError array
    }else{
        include 'loginForm.php';
        echo $_SESSION['loginError'];
}

?>
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
