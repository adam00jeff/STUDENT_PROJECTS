<!DOCTYPE html>

<html lang="en">

<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: Basics</title><!--Tab Title-->
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>Basics of PHP</h1>
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

<h4>Output Strings</h4>

Basic PHP output using "echo": 
<br>
<?php
//echo out Name and Student ID
echo "Adam Jeffreson c3263312";
?>

<h2>Using Escape Characters</h2>
Using echo with special characters:<br>
<?php
//escapes special characters
echo "\"Most programmers say it's better to use 'echo' rather than 'print'\" says who?"
?>

<h2>Variables</h2>
<?php

//variables declared
$name=David;
$age=12;

//variables displayed concatenated
echo "Variables displayed concatenated:<br>";
echo 'Hi my name is ' .$name .' and I am ' .$age .' years old<br><br>';

//variables unconcatenated
echo "Variables displayed unconcatenated:<br>";
echo "Mi nombre es $name y tengo $age anos de edad";

?>

<h2>Functions</h2>
<?php
//gettype() returns the type of the vairable 
echo "gettype() returns the type of the vairable<br>";
echo gettype($name);
echo'<br/><br/>';
//strlen() returns the length of the selected string
echo 'strlen($name); finds the string length and returns: <br />';
echo strlen($name);
echo '<br /><br/>';
//strtoUpper() returns the chosen string in UPPERCASE
echo 'strtoUpper($name);converts the string to UPPERCASE and returns: <br />';
echo strtoUpper($name);
?>

<h2>Arithmetic</h2>
<?php
$num1=9;
$num2=12;

//simple arithmetic
$multiply=$num1*$num2;
$percentage=($num1/$num2)*100;
$divide=$num2/$num1;
$dividefloor=floor($num2/$num1);
$remainder = $num2 / $num1;
$remainder = fmod($num2,$num1);

//echo results
echo "num1 = " .$num1."<br />";
echo "num2 = ".$num2."<br />";
echo "num1 x num2 = ".$multiply."<br />";
echo "num1 as a percentage of num2 = ".$percentage."%<br />";
echo "num2 divided by num1 = ".$dividefloor." remainder ".$remainder;

?>

<h2> Calculation </h2>

Echo out some simple variables using concatenation 
<br>
<?php

//set variables
$mtrHeight = 1.8;
$inches = ($mtrHeight*100)/2.54;
$feet = floor($inches/12);
$remainder = $inches%12;

//echo variables
echo "Name: $name<br />";
echo "Age: $age<br />";
echo "Height in Meters: ".$mtrHeight."<br />";
echo 'Height in Feet and inches: '.$feet .'ft' .$remainder .'ins<br />';
?>

</section>

<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>

</body>

</html>
