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
$id = $_GET['userid'];
//Produce query to select the product record for the id provided
$query="SELECT * FROM Users WHERE UserID = '$id'";
//run query and store result
$result=mysqli_query($connection, $query);
//extract row from result using mysqli_fetch_assoc()and store $row
$row=mysqli_fetch_assoc($result);
//Print_r($row);
//exit();
?>

<form method="post" action="amendUser.php">
   <fieldset>
        <legend>User Details: </legend><br>
        <label for="Name">Name:</label><br>
            <input type="text" name="txtName"txtFName" value="<?php echo $row['Name'];?>" /><br>
                   
        <label for="address">Address:</label><br>
            <input type="text" name="txtAddress" id="txtAddress" value="<?php echo $row['Address'];?>" /><br>
            
        <label for="txtEmail">Email:</label><br>
            <input type="text" name="txtEmail" id="txtEmail"  value="<?php echo $row['Email'];?>" /><br>
                              
        <label for="txtPhone">Phone:</label><br>
            <input type="text" name="txtPhone" id="txtPhone" value="<?php echo $row['Phone'];?>" /><br>
       
        <br>         
    </fieldset>    
    <input type="submit" value="Submit" name="subUser"/>
    
    
    
</form>
<a href="../users/selectUser.php">Back</a>
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