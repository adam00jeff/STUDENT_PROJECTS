<!DOCTYPE html>

<html lang="en">

<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: Forms Extended</title><!--Tab Title-->
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>Forms Extended</h1>
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


<h1>Basic</h1>

echo out two strings as variables:<br>
<?php

//Declare two variables assign one your name and the other your id
//Echo out a statement below using concatenation
//My name is Paul and my id is c123456

$name = "Adam jeffreson";
$id= "C3263312";
echo "My name is: ".$name." and my id is ".$id."<br>";



?>

<h1>Loops</h1>
create an array of 4 colours with a counter variable<br>
loop through the array, echo out the colour and the count<br>
<?php

//Declare an array to hold the name of 4 colours
//Set up a while loop - don't forget the counter
//Set the loop condition to loop for the length of the array
//In the loop echo out the counter and a colour from the array
//at the location pointed to by the counter
//Don't forget to increment the counter
//Output like below:
//0 Blue
//1 Yellow
//2 Red
//3 Black

$colour = array("blue", "yellow","red","black");
$count = count($colour);
$counter = 0;

while ($counter < $count) {
    echo $counter."   ".$colour[$counter]."<br>";
    $counter ++;
    
};

?>

<h1>Forms</h1>

add form method and object names on submission<br>
collect the data in variables, echo them out:<br>

<form method="post" action="progresscheck2.php">

<p><label>Userid:</label></p>

<input type="text" name="txtUser" value="" />

<p><label>Password:</label></p>

<input type="text" name="txtPass" value="" />

<p><input type="submit" value="Submit" name="subUser"/></p>

</form>

<?php

//complete the form method and the form object names
//collect the data entered into the form and echo to screen
//As an extra - block processing of form until submitted

if(isset($_POST['subUser'])){
$username=$_POST['txtUser'];
$password=$_POST['txtPass'];
echo "Username = ".$username."  Password =".$password;
}
?>

</body>

</html>