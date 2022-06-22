<!DOCTYPE html>

<html lang="en">

<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: SQL</title><!--Tab Title-->
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>SQL</h1>
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

<h2> Insert </h2>
form to insert data into the Customer table, using 'insertRecord.php'<br>

<form method="post" action="insertRecord.php">
    <fieldset>
        <legend>Enter Customer Details</legend>
        <label for="firstName">First Name:</label>
        <input type="text" name="txtFName" /><br>
        <label for="surname">Surname:</label>
        <input type="text" name="txtSName" /><br>
        <label for="email">Email:</label>
        <input type="text" name="txtEmail" /><br>
        <label for="password">Password:</label>
        <input type ="text" name="txtPassword" /><br>
        <label for="gender">Gender:</label>
        <select name="selGender" id="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="O">Other</option>
        </select><br>
        <label for="age">Age:</label>
        <input type="text" name="txtAge" /><br>
        <input type="submit" name="subCustomer" value="Submit"/>
        <input type="reset" value="Clear"/><br>
    </fieldset>
</form>
<br>
<br>
'selectRecord.php' is included below: <br>
<a href="selectRecord.php">Direct Link to Select Statement</a><br>
<?php 
//include select
include 'selectRecord.php';
?>
<br>
<a href="selectRecord.php">Direct Link to Select Statement</a>

</section>
<br><br>
<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>

</body>

</html>