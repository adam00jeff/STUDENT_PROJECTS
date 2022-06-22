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
<h1> Your Order</h1>
<?php
include '../connection.php';


if (isset($_SESSION['info'])){
    echo $_SESSION['info'];
    
}else{
$total = 0;
//print_r ($_SESSION['cart']); 

//print_r ($_SESSION['complete']);
echo "<br><br>";
echo "<table border=1 table width='500' style='color:black'";
echo "<tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        
        
    </tr>";

foreach ($_SESSION['complete'] as $key){
    echo "<tr><td>".$key['name']."</td>";
    echo "<td>".$key['price']."</td>";
    echo "<td>".$key['quantity']."</td></tr>";
    $total = ($total+($key['price']*$key['quantity']));
}

echo "<tr><td>CART TOTAL: </td><td>£".$total."</td></tr>";
echo "</table>"; // close the table   
?>
<form method="post"style='color:black'action="completeaction.php">
    <label for="orderType">Delivery Type:</label>
    <input type="radio" id="radType" name="radType" value="collection"/>
    <label for="radCollection">Collection</label>
    <input type="radio" id="radType" name="radType" value="delivery"/>
    <label for="radDelivery">Delivery</label><br><br>
    <label for="timeslot">Choose a timeslot:</label>
    <select name="timeslot" id="timeslot">
        <option value="asap">ASAP</option>
        <option value="9-12">9am-12pm</option>
        <option value="1-4">1pm-4pm</option>
        <option value="5-8">5pm-8pm</option>
    </select>
</from>
<br><br>
<button class="cart-button"  onclick="location.href='../cart/cartclear.php';"<span>Clear</span></button>
<button class="cart-button"  onclick="location.href='../cart/completeaction.php';"<span>Complete</span></button>
<?php
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