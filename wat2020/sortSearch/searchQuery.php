<?php

//Make connection to database
// start $_SESSION()
include 'init.php';

//get form data from $_POST
$order=$_POST['radOrder'];
$type=$_POST['selType'];
$search=$_POST['txtSearch'];

//create variables for query based on form variables
$sqlAnd="";
$sqlWhere="";

if(isset($_POST['radOrder'])){
    if($order != "a-z"){
        $order = "ORDER BY Price DESC";
    } else {
        $order = "ORDER BY Name ASC";
    }
}

if(isset($_POST['selType'])){
    $sqlWhere = "WHERE ";
    $sqlAnd = "AND";
    
    if($type == "Veg"){
        $type ="Category = 'Vegetarian' ";
    }elseif($type == "Meat"){
        $type ="Category = 'Meat' ";
    }elseif($type == "All"){
        $type = "";
        $sqlAnd = "";
        $sqlWhere = "";
    }
    
}

//calls function for search security
if(!empty($_POST['txtSearch'])){
    $sqlWhere = "WHERE ";
    $search = sanitise_search($_POST['txtSearch']);
    $searchQ = " Name LIKE '%".$search."%' ";
} else {
    $sqlAnd = "";
}
//function to sanitise search input
function sanitise_search($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}


//run query to select variable data from Pizza table
$query="SELECT * FROM Pizza "
.$sqlWhere.$type.$sqlAnd.$searchQ.$order;
 
 //test below to output query with results
 //echo $query;
 //exit();
 
$result=mysqli_query($connection, $query);
//reports if the result is returned empty
if (mysqli_num_rows($result)==0){
    echo "<h2>No Pizza Found!</h2>";
}else{
//echo out results in a table
echo "<table border=1>";
echo "<tr>
       <th>Name </th>
        <th>Price</th>
       <th>Image</th>
   </tr>";
   // loop to echo out results within the table
while ($row=mysqli_fetch_assoc($result)){

echo "<tr><td>".$row['Name'].
   "</td><td>".$row['Price'].
   '</td><td> <img src="./Pizza/'.$row['Image'].'"</td></tr>';
}   
echo"</table>";

echo"<br><br>";
}
