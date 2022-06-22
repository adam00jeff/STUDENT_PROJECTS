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

echo '<h2>Employee Accounts</h2>';
echo "<a href=\"../login_register/login.php\">Back</a>";


$query="SELECT * FROM Users WHERE UserID < 100";

//store the result of the query in a variable called $result
//echo $query;
//echo exit;
$result=mysqli_query($connection, $query);

//Set up table to display the restults of the query
echo "<table border=1 table width=\"1200\">";
echo "<tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Address </th>
        <th>Email</th>
        <th>Phone</th>
        
        <th>Amend</th>
        <th>Delete</th>
    </tr>";



//while loop to iterate through $result array and display

while ($row=mysqli_fetch_assoc($result)){
echo "<tr><td>".$row['UserID'].
    '</td><td> '.$row['Name'].
    '</td><td> '.$row['Address'].
    '</td><td> '.$row['Email'].
    '</td><td> '.$row['Phone'].
    
    '</td><td><a href="amendUser.php?userid='. $row['UserID'].'">Amend</a></td>
    <td><a href="deleteUser.php?userid='. $row['UserID'].'">Delete</a></td></tr>';
    }
echo "</table>"; // close the table

echo '<h2>Customer Accounts</h2>';



$query="SELECT * FROM Users WHERE UserID > 100";

//store the result of the query in a variable called $result
//echo $query;
//echo exit;
$result=mysqli_query($connection, $query);

//Set up table to display the restults of the query
echo "<table border=1 table width=\"1200\"";
echo "<tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Address </th>
        <th>Email</th>
        <th>Phone</th>
        
        <th>Amend</th>
        <th>Delete</th>
    </tr>";



//while loop to iterate through $result array and display

while ($row=mysqli_fetch_assoc($result)){
echo "<tr><td>".$row['UserID'].
    '</td><td> '.$row['Name'].
    '</td><td> '.$row['Address'].
    '</td><td> '.$row['Email'].
    '</td><td> '.$row['Phone'].
    
    '</td><td><a href="amendUser.php?userid='. $row['UserID'].'">Amend</a></td>
    <td><a href="deleteUser.php?userid='. $row['UserID'].'">Delete</a></td></tr>';
    }
echo "</table>"; // close the table
?>



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