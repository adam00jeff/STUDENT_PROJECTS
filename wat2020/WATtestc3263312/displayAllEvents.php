<?php

//Make connection to database
include 'connection.php';


$query="SELECT * FROM events";


$result=mysqli_query($connection, $query);


while ($row=mysqli_fetch_assoc($result)){

echo $row['eventName']." ".$row['eventCategory']." ".$row['eventLocation'].'<br>';

}
?>