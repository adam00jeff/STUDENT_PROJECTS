<!DOCTYPE html>

<html lang="en">

<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: Progress Check 1</title><!--Tab Title-->
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>WAT: Progress Check 1</h1>
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
<h1>WAT: Progress Check 1</h1>

<h1>Generate Statements</h1>

<?php
echo "Code to echo Username and ID:<br>";

//produce code that will display your name and ID on separate lines
echo "Adam Jeffreson <br> c3263312 <br>";

echo "<br>Code to to output the string \"It's not more than £3\" including all speech marks:<br>";
//produce code to output the string "It's not more than £3" including all
//speech marks.
echo '"It\'s not more than £3"<br>';


?>

<h1>Use Arithmetic Operators </h1>
Declare a $loan variable, and $interest variable and calculate the payable interest<br>
<?php

/*Calculate annual interest paid for a loan. Declare two variables one to
*hold the value of loan and one the interest rate. Set these to 500 and 3.5
*respectively. Calculate the annual interest payable based on the formula
*interest paid = (loan amount / 100) x rate of interest
*Display the following statement using your variables:
* Loan: 500
* Rate: 3.5%
* Payable: £17.50
*/
$loan = 500;
$interest = 3.5;
$total = 0;

$total = (($loan/100)*$interest);

echo "<br>Loan: ".$loan;
echo "<br>Rate: ".$interest;
echo "<br>Payable: £".number_format($total,2);

?>

<h1>Use Conditional Statements</h1>
Using if statments to check if Username and Password are correct:<br>
This is incorrect data:<br>
<?php

/*Declare variables to hold username and password, assign the values
* "user01" and "pass". Write code that will test the value
* of your two variables and display the word "success" if
* user is "user01" and password is "passwd", or "fail" if not.
*/

$username = "user01";
$password = "pass";

if ($username == "user01"&& $password == "passwd"){
    echo "success<br>";
} else {
    echo "fail<br>";
}

echo "This test will pass:<br>";
if ($username == "user01"&& $password == "pass"){
    echo "success<br>";
} else {
    echo "fail<br>";
}

echo "<br>using the same variables, test the length of the string is >6 first:<br>";
echo "This test will fail:<br>";
/*Use the same variables but this time write code to first test if
* the password is at least 6 characters in length, if not
* display a message "Please use at least 6 characters", if this test
* is passed then test as before.

*/
if (strlen($password)<6){
    Echo "Please use at least 6 characters<br>";
}elseif ($username == "user01"&& $password == "passwd"){
    echo "success<br>";
} else {
    echo "fail<br>";
}
echo "<br>This test will update the password variable and then pass:<br>";
$password = "password";
if (strlen($password)<6){
    Echo "Please use at least 6 characters<br>";
}elseif ($username == "user01"&& $password == "password"){
    echo "success<br>";
} else {
    echo "fail<br>";
}
?>
<br><br>
</section>
<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>

</body>

</html>
