<!DOCTYPE html>

<html lang="en">

<?php

//Make connection to database
include 'connection.php';

//Display heading
echo 'Select ALL from the test table<br>';

//set up a query to select all records from customer table

$query="SELECT * FROM testTable";
//store the result of the query in a variable called $result

$result=mysqli_query($connection, $query);

//Use a while loop to iterate through your $result array and display

//the first name, last name and email for each record

while ($row=mysqli_fetch_assoc($result)){

echo 'Entry ID:'.$row['Entry ID'].'<br>Text: '.$row['Text'].'<br>Number: '.$row['Number'].'<br>Selection: '.$row['Selection'].'<br>Sum: '.$row['Sum'].'<br><br />';

}
?>
