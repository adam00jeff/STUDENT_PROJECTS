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

//Display heading

echo '<h2>ALL Products</h2>';
echo "<a href=\"../login_register/login.php\">Back</a>";
//run query to select all records from products table

$query="SELECT * FROM Products";

//store the result of the query in a variable called $result

$result=mysqli_query($connection, $query);

//Set up table to display the restults of the query
echo "<table border=1 table width=\"1200\"";
echo "<tr>
        <th>Product ID</th>
        <th>Baker ID</th>
        <th>Product Name </th>
        <th>Product Price</th>
        <th>Quantity</th>
        <th>Product Description</th>
        <th>Ingredients</th>
        <th>Allergens</th>
        <th>Product Image</th>
        <th>Amend</th>
        <th>Delete</th>
    </tr>";



//while loop to iterate through $result array and display

while ($row=mysqli_fetch_assoc($result)){
echo "<tr><td>".$row['ProductID'].
    '</td><td> '.$row['BakerID'].
    '</td><td> '.$row['Prod_Name'].
    '</td><td> '.$row['Price'].
    '</td><td> '.$row['Quantity'].
    '</td><td> '.$row['Prod_Desc'].
    '</td><td> '.$row['Ingredients'].
    '</td><td> '.$row['Allergens'].
    '</td><td> <img src="./product_images/'.$row['Prod_Image']. // replaces the ImageName with the associated image
    // links below to amend and delete pages
    '"</td><td><a href="amendProduct.php?prodid='. $row['ProductID'].'">Amend</a></td>
    <td><a href="deleteProduct.php?prodid='. $row['ProductID'].'">Delete</a></td></tr>';
    }
echo "</table>"; // close the table
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

