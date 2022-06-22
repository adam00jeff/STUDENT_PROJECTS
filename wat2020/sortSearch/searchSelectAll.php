<?php

//Make connection to database
// start $_SESSION()
include 'init.php';

//run query to select all records from pizza table

$query="SELECT * FROM Pizza";
$result=mysqli_query($connection, $query);

//store the result of the query in a variable called $result
echo "<table border=1>";
echo "<tr>
        <th>Name </th>
        <th>Price</th>
        <th>Image</th>
    </tr>";
//loop through results, echo out as table
while ($row=mysqli_fetch_assoc($result)){

echo "<tr><td>".$row['Name'].
    "</td><td>".$row['Price'].
    '</td><td> <img src="./Pizza/'.$row['Image'].
    '"</td></tr>';
    }
echo"</table>";

echo"<br><br>";