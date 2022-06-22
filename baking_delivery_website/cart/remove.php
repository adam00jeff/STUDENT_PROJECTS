<?php
include '../connection.php';
//Gather id sent from crud.php page
$id = $_GET['prodid'];

unset ($_SESSION['cart']['$id']);

header("Location: {$_SERVER['HTTP_REFERER']}");