<?php

include 'connection.php';

include 'showErrors.php';

$query="SELECT * FROM events";

$result=mysqli_query($connection, $query);

while($row=mysqli_fetch_assoc($result)){

echo $row['eventName'].' '.$row['eventCategory'].'<br />';

}

?>
