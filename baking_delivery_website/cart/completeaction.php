<?php

include '../connection.php';

$userid = $_SESSION['user_id'];
$names = array();
$total = 0;
foreach ($_SESSION['complete'] as $key){
    $names[]=$key['name'].$key['quantity'];
    $total = ($total+($key['price']*$key['quantity']));
}
$date = date("Y-m-d");
$time = date("h:i:sa");
$type = $_POST['radType'];
$slot = $_POST['timeslot'];
$namesimp = implode(',', $names);

$query="INSERT INTO Orders (OrderID,UserID,Products,Total,Date,Time,Type,Slot)
VALUES
(NULL,'$userid','$namesimp','$total','$date','$time','$type','$slot')";


//Temporarily echo $query for debugging purposes
//echo $query;
//echo exit();
//run $query

mysqli_query($connection, $query);

// Further Testing:
if(mysqli_query($connection, $query)){
$_SESSION['info'] = "ORDER SUCCESSFUL!";
unset ($_SESSION['cart']);
unset ($_SESSION['complete']);
unset ($_SESSION['quantity']);
} else{
$_SESSION['info'] = "";
}

//return to calling page(stored in the server variables)

header("Location: {$_SERVER['HTTP_REFERER']}");

?>