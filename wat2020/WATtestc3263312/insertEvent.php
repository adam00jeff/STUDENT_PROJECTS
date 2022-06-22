<?php

include 'connection.php';

if(isset($_POST['subEvent'])){
   
        $text = $_POST['txtName'];
        $cat = $_POST['txtCat'];
        $loc = $_POST['txtLoc'];
       }       


$query="INSERT INTO events(eventName,eventCategory,eventLocation) VALUES ('$text', '$cat', '$loc')";

mysqli_query($connection, $query);


header('location:WATadamJeffreson.php');

?>
