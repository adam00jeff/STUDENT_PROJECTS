<!DOCTYPE html>

<html lang="en">


<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: Select Record</title><!--Tab Title-->

<h1>Select Record</h1>

<?php

//Make connection to database

include 'connection.php';

//Display heading

echo '<h2>Select ALL from the Customer Table</h2>';

//run query to select all records from customer table

$query="SELECT * FROM Customer";

//store the result of the query in a variable called $result

$result=mysqli_query($connection, $query);

//Use a while loop to iterate through your $result array and display

//the first name, last name and email for each record

while ($row=mysqli_fetch_assoc($result)){

echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';

}
// code below to demonstrate various WHERE conditions on select * statments
echo '<h2>Select ALL from the Customer Table with Age > 22</h2>';
$query="SELECT * FROM Customer WHERE Age>'22'";
$result=mysqli_query($connection, $query);
while ($row=mysqli_fetch_assoc($result)){
    echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age']."<br />";
    }
echo '<h2>Select ALL Females from the Customer Table with Age > 22</h2>';
$query="SELECT * FROM Customer WHERE Age>'22'AND Gender = 'F'";
$result=mysqli_query($connection, $query);
while ($row=mysqli_fetch_assoc($result)){
    echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age']."<br />";
    }
echo '<h2>Select ALL Females from the Customer Table with Age >= 22</h2>';
$query="SELECT * FROM Customer WHERE Age>='22'AND Gender = 'F'";
$result=mysqli_query($connection, $query);
while ($row=mysqli_fetch_assoc($result)){
    echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age']."<br />";
    }
echo '<h2>Select Males from the Customer Table List by Age descending</h2>';
$query="SELECT * FROM Customer WHERE Gender = 'M' ORDER BY Age DESC";
$result=mysqli_query($connection, $query);
while ($row=mysqli_fetch_assoc($result)){
    echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age']."<br />";
    }
echo '<h2>Select All from the Customer Table with "a" in the first name</h2>';
$query="SELECT * FROM Customer WHERE FirstName LIKE '%a%'";
$result=mysqli_query($connection, $query);
while ($row=mysqli_fetch_assoc($result)){
    echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age']."<br />";
    }
    
?>
