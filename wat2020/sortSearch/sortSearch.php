<!DOCTYPE html>

<html lang="en">

<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: sortSearch</title><!--Tab Title-->
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>Sort Search</h1>
</section>

<section id="sidebar"> <!-- generic page sidebar -->
<center><h3>Portfolio</h3></center>
<a href="../basics/basics.php">Basics</a><br>
<a href="../fundamentals/fundamentals.php">Fundamentals</a><br>
<a href="../forms/forms.php">Forms</a><br>
<a href="../mysql/mysql.php">MySQL</a><br>
<a href="../crud/crud.php">CRUD</a><br>
<a href="../sessions/sessions.php">Sessions</a><br>
<a href="../register/register.php">Register</a><br>
<a href="../sortSearch/sortSearch.php">Search</a><br>
<center>----------</center>
<a href="../watIndex.html">Home</a><br>
</section>


<section id="content"> <!-- main page content-->
form allows for multi-criteria searchs of the Pizza table<br>
user selections create SQL query from variables<br>
results or errors are displayed to the user<br>
plain text search is sanitised before use<br>
<?php

//include init.php for connection and $_SESSION()
include 'init.php';

//checks for login status
//displays page if found, provides login/register option if not
if(isset($_SESSION['searchUser'])){
    echo '<br><br>Welcome '.$_SESSION['searchUser']; ?>
       
       <!--html form for search options -->
       <br><br>
        <form method="post">
            <fieldset>
                <legend>Search Options</legend><br>
                    <label for="radOrder">Order By:</label>
                    <input type="radio" id="a-z" name="radOrder"<?php if(isset($_POST['radOrder'])&&$_POST['radOrder']=="a-z") echo "checked";?> value="a-z">
                    <label for="radA-Z">A-Z</label>
                    <input type="radio" id="price" name="radOrder"<?php if(isset($_POST['radOrder'])&&$_POST['radOrder']=="price") echo "checked";?> value="price">
                    <label for="radPrice">Price</label><br><br>
                    <label for="selType">Type:</label>
                    <select name="selType" id="selType">
                    <option <?php if($_POST['selType']=="All") { ?>selected="true" <?php }; ?>value="All" selected>All</option><
                    <option <?php if($_POST['selType']=="Veg") { ?>selected="true" <?php }; ?>value="Veg">Vegitarian</option>
                    <option <?php if($_POST['selType']=="Meat") { ?>selected="true" <?php }; ?>value="Meat">Meat</option>
                    </select><br><br>
                    <label for="search">Search: </label>
                    <input type="text" name="txtSearch" value="<?php if(isset($_POST['txtSearch'])){echo $_POST['txtSearch'];}?>" /><br>
            </fieldset>
            <input type="submit" value="Submit" name="searchSubmit"/>
            <input type ="button" onclick="location.href='searchClear.php';" value="Clear"/>
        </form>
        
   <?php   
        // includes full table if search has not been submitted
        if (isset($_POST['searchSubmit'])){
            include 'searchQuery.php';
        } else {
            include 'searchSelectAll.php';
        }
   
   
   
         //logout link, destroys session
         echo "<br><br><small><a href='searchLogout.php'>Logout</a></small>";
                    
    //provides login form if no user found
    //includes any errors in loginError array
    }else{
        include 'searchLoginForm.php';
        echo $_SESSION['loginError'];
}



?>




<br><br>
</section>

<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>

</body>

</html>

