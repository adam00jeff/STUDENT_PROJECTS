<!DOCTYPE html>

<html lang="en">

<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: Sessions</title><!--Tab Title-->
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>Sessions</h1>
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
<br><br>
this page will display a login page if $_SESSION['user'] is unset<br>
login information is checked against the simpleusers table<br><br>
The table contains the following users:<br>
FirstUser : password01<br>
SecondUser : password02<br><br>
entering correct login infomration will allow access to the protected page<br>
<?php

//include init.php so session vars can be used
include 'init.php';
//Use an if statement to determine whether the session var holding 
//the user name ($_SESSION['user'] has been set. If it has, echo out 
//a welcome message for the user, followed by a links to a pages 
//called protected.php and logout.php.

if(isset($_SESSION['user'])){
    echo 'Welcome '.$_SESSION['user'];
    echo "<br><a href='protected.php'>Protected</a>
            <a href='logout.php'>Logout</a>";
//add an else section that will include loginform.php and display any 
//error message that is held in ($_SESSION['error']
    }else{
        include 'loginForm.php';
        echo $_SESSION['error'];
}



?>





</section>

<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>

</body>

</html>

