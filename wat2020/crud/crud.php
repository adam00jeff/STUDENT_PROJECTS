<!DOCTYPE html>

<html lang="en">

<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: CRUD</title><!--Tab Title-->
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>CRUD</h1>
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

<h2>Manage Product Inventory</h2><br>
<?php   
        include 'displayProducts.php';
?>
<!--basic form to enter data into SQL query -->
<br><h3>Insert Products</h3>
[test images on file: underwearMens.jpg, coatWhite.jpg]
<br>
<br>
<form method="post" action="insertProduct.php">
    <fieldset>
        <legend>Enter New Product Details:</legend>
        <label for="ProductName">Product Name:</label><br>
        <input type="text" name="txtName" id="txtName"><br>
        <label for="Price">Price:</label><br>
        <input type="number" name="numPrice" id="numPrice" min="0.00" max="10000.00" step="0.01" /><br>
        <label for="ImageFileName">Image File Name:</label><br>
        <input type="text" name="txtImageName" id="txtImageName"><br>
        <input type="submit" value="Submit" name="subProduct"/>
        <input type="reset" value="Clear" />
    </fieldset>
</form>

</section>

<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>

</body>

</html>