<?php
include '../connection.php';
//get form data from $_POST
$order=$_POST['radOrder'];
$dairy=$POST['dairy'];
$gluten=$_POST['gluten'];
$soy=$_POST['soy'];
$search=$_POST['txtSearch'];

//create variables for query based on form variables
$sqlAnd="";
$sqlWhere="";

if(isset($_POST['radOrder'])){
    if($order != "a-z"){
        $order = "ORDER BY Price DESC";
    } else {
        $order = "ORDER BY Prod_Name ASC";
    }
}

if(isset($_POST['dairy'])){
    $sqlWhere = "WHERE ";
    $sqlAnd = "AND";
    $dairy = "Allergens NOT LIKE '%Dairy%' ";
}
if(isset($_POST['gluten'])){
    $sqlWhere = "WHERE ";
    $sqlAnd = "AND";
    if(isset($_POST['dairy'])){
    $gluten = "AND Allergens NOT LIKE '%Gluten%' ";} else {
        $gluten = "Allergens NOT LIKE '%Gluten%' ";
    }
}
 if(isset($_POST['soy'])){
    $sqlWhere = "WHERE ";
    $sqlAnd = "AND";
    if(isset($_POST['dairy'])){
    $soy = "AND Allergens NOT LIKE '%Soy%'";} elseif (isset($_POST['gluten'])) {
        $soy = "AND Allergens NOT LIKE '%Soy%'";
    } else {
        $soy = "Allergens NOT LIKE '%Soy%'";
    }
    
}   
    
  

//calls function for search security
if(!empty($_POST['txtSearch'])){
    $sqlWhere = "WHERE ";
    $search = sanitise_search($_POST['txtSearch']);
    $searchQ = " Prod_Name LIKE '%".$search."%' ";
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
$query="SELECT * FROM Products "
.$sqlWhere.$dairy.$gluten.$soy.$sqlAnd.$searchQ.$order;
 
 //test below to output query with results
 //echo $query;
 //exit();
 
$result=mysqli_query($connection, $query);
//reports if the result is returned empty
if (mysqli_num_rows($result)==0){
    echo "<h2>Sorry, no products found!</h2>";
}else{

while ($row=mysqli_fetch_assoc($result)){
    
echo "
    <li class=\"item\">       
        <div>
        <a class=\"item-link\">
            <div class=\"item-details\"> 
            <a href=\"product.php?prodid=".$row[ProductID]."\"><img src=\"products/product_images/".$row[Prod_Image]."\" class=\"item-img\"></a>
            
                <div class=\"item-info\">
                <span class=\"item-title\">".$row[Prod_Name].
                "<br><small>".substr($row[Prod_Desc], 0, 34)." ... <br></small>
                </span>
                </div>
            </div>
        </a>
            <div class=\"cart-container\">
            
            <button class=\"cart-button\" id=\"btn".$row[ProductID]."\"data-hover=\"ADD\" onclick=\"location.href='home.php?prodid=".$row[ProductID]."\">
            <span>£".$row[Price]."</span></button>
            
            </div>
        </div>
        </li>";
}
}
