<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="newstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&Muli:wght@300&family=Oswald&family=Anton&display=swap" rel="stylesheet">
		<title>Order</title>
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

<?php include 'connection.php';

?>

            <div style="width:100%; height:auto; grid-area:main; padding: 80px 0 80px 0;">
                <div class="order-box">
                   <?php 
                ///   foreach ($_SESSION['cart'] as $cart){
       // echo $_SESSION['cart'][];
///}

if (isset($_SESSION['user'])){
    unset($_SESSION['info']);


$cart = implode(',', $_SESSION['cart']);
$query="SELECT * FROM Products WHERE ProductID IN ($cart)";

//echo $query;

//store the result of the query in a variable called $result

$result=mysqli_query($connection, $query);

//print_r ($_SESSION['quantity']);

$count= (array_count_values($_SESSION['quantity']));

//print_r ($count);
//Set up table to display the restults of the query
echo "<table border=1 table width='500'";
echo "<tr>
        <th>        </th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Remove</th>
        
    </tr>";



$id=0;
$total=0;
$prodcounter=0;

//initiates a loop of products table
while ($row=mysqli_fetch_assoc($result)){
    $total= ($total+$row['Price']);
    $id = $row['ProductID'];
    $counter = $count[$id];

echo '<tr><td> <img src="products/product_images/'.$row['Prod_Image'].'"width="100" height="100"</td>
    <td>'.$row['Prod_Name'].'</td>
    <td> £'.$row['Price'].'</td>
    <td> '.$count[$id].'</td>
    <td><a href="cart/remove.php?prodid='. $row['ProductID'].'">Remove</a></td></td></tr>';

$_SESSION['complete'][$prodcounter]['name']=$row['Prod_Name'];
$_SESSION['complete'][$prodcounter]['price']=$row['Price'];
$_SESSION['complete'][$prodcounter]['quantity']=$counter;

$prodcounter++;
    }
    
    
echo "<tr><td>CART TOTAL: </td><td></td><td>£".$total."</td></tr>";
echo "</table>"; // close the table   
               

                   
             

                   ?>
                     
                     
                     <button class="cart-button"  onclick="location.href='cart/cartclear.php';"<span>Clear</span></button>
                     <button class="cart-button"  onclick="location.href='cart/complete.php';"<span>Complete</span></button>
                </div>
            </div>
       <?php    
   }else{
       echo "Please Login or Register to Order: <br><br>";
       echo "<a href=\"login_register/register.php\">Register</a><br><br>";
       echo "<a href=\"login_register/login.php\">Login</a>";
   }

       
       ?>         
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
                <p>&copy; 2021 Granny's bakes.
                24 make belive drive
                Leeds LS6 4FF UK</p>    
            </div>
        </div>
        </div>
        <script src="scripts/main.js"></script>
	</body>
</html>
