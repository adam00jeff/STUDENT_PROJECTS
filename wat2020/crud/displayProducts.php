 <?php

//Make connection to database

include 'connection.php';

//Display heading

echo "<h4>Product Table</h4>";

//run query to select all records from customer table

$query="SELECT * FROM products";

//store the result of the query in a variable called $result

$result=mysqli_query($connection, $query);

//Set up table to display the restults of the query
echo "<table border=1>";
echo "<tr>
        <th>Product Name </th>
        <th>Product Price</th>
        <th>Product Image</th>
        <th>Amend</th>
        <th>Delete</th>
    </tr>";

while ($row=mysqli_fetch_assoc($result)){ // loops through the table by row, echos out with table tags
echo "<tr><td>".$row['ProductName'].
    '</td><td> '.$row['ProductPrice'].
    '</td><td> <img src="./images/'.$row['ProductImageName']. // replaces the ImageName with the associated image
    // links below to amend and delete pages
    '"</td><td><a href="amendProduct.php?prodid='. $row['ProductID'].'">Amend</a></td>
    <td><a href="deleteProduct.php?prodid='. $row['ProductID'].'">Delete</a></td></tr>';
    }
echo "</table>"; // close the table