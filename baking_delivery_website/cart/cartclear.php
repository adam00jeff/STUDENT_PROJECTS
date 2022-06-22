<?php
include '../connection.php';
unset($_SESSION['cart']);
unset($_SESSION['quantity']);
unset($_SESSION['complete']);

header("Location: {$_SERVER['HTTP_REFERER']}");