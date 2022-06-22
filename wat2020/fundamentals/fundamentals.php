<!DOCTYPE html>

<html lang="en">

<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: Fundamentals</title><!--Tab Title-->
<style>
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
</style>
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>Fundamentals</h1>
</section>

<section id="sidebar"> <!-- generic page sidebar -->
<center><h3>Portfolio</h3></center>
<a href="../basics/basics.php">Basics</a><br>
<a href="../fundamentals/fundamentals.php">Fundamentals</a><br>
<a href="../forms/forms.php">Forms</a><br>
<a href="../mysql/mysql.php">MySQL</a><br>
<a href="../crud/crud.php">CRUD</a><br>
<a href="../sessions/sessions.php">Sessions</a><br>
<a href="../register/register.php">Register</a><br>
<a href="../sortSearch/sortSearch.php">Search</a><br>
<center>----------</center>
<a href="../watIndex.html">Home</a><br>
</section>


<section id="content"> <!-- main page content-->



<h1>Fundamentals of PHP</h1>


<h2>Selection and Comparison</h2>
<?php
// demonstrations of basic PHP 

$day = date('l'); // lowercase L

// demonstration of the PHP date function
echo "PHP date() functions:<br><br>";
echo "'l' shows the full textual representation of the day<br>";
echo "It's ".$day;//calling the date() method through the $day variable
echo "<br><br>";


echo "'j' shows the day of the month without leading zeros: <br>";
$day = date('j'); // demonstrating the different available outputs of date()
echo"It's ".$day; // outputting using the same variable
echo"<br>";

echo"This can be used with 'S' to add the English suffix to the date :<br>";
$day = date('jS');// using multiple formatt options on the date() method
echo"it's the ".$day; // outputting using the same variable
echo"<br>";

echo"Further examples:<br>";
$today = date("F j, Y, g:i a");  //displays textdate-number-year-time-am/pm
echo "".$today;echo"<br>";

$today = date("m.d.y");     // displays month-day-year
echo "".$today;echo"<br>";

$today = date("j, n, Y");   // displays day-month-year
echo "".$today;echo"<br>";

$today = date("Ymd");       // displays year-month-day
echo "".$today;echo"<br>";
?>

<h2>If/Else</h2>
<?php
// simple IF/ELSE statments 
$day = date('l'); // sets the $day variable to the text representation of the current day

echo "Using If/ Else to show if it is Wednesday : <br>";
if ($day == 'Wednesday') { // tests if the day is equal to wednesday
    echo "it's midweek<br>"; // prints if true
} else {
    echo "it's not midweek<br>"; // prints if false
}

echo "<br>Again with values fixed to 'Wednesday' and 'Thursday'<br>";
$day ='Wednesday'; // fixes the $day variable to wednesday
if ($day == 'Wednesday') { // tests to see if $day is equal to 'Wednesday'
    echo "it's midweek<br>"; // prints if true
} else {
    echo "it's not midweek<br>"; // prints if false
}

$day ='Thursday'; // fixes the $day variable to 'Thursday'
if ($day == 'Wednesday') { // tests to see if $day is equal to 'Wednesday'
    echo "it's midweek<br>"; // prints if true
} else {
    echo "it's not midweek<br>";// prints if false
}

$hour=date('H'); // sets the $hour variable to the current hour

echo "<br> Using date() to show time of day: <br>";
echo "the hour is " .$hour; // prints the current hour

echo "<br>";
if ($hour < 12) { // checks to see if $hour is under 12
    echo "Good Morning <br>"; // prints if true
} elseif($hour < 18) { // if false, checks to see if $hour is under 18
    echo "Good Afternoon <br>"; // prints if true
}else {
    echo "Good Night<br>"; // prints if $hour is not <12 or <18
}

echo "<br>Using If/Else for validation:<br>";
echo "<br>Using 'password' as entered data: <br>";
$password = 'password'; // creates the variable $password and enters the data 'password'
if(strlen($password)>4 && strlen($password)<10 ){ // uses strlen() to return the length of the variable $password and check if it is >4 & <10
    echo "Password length is valid<br>";// prints if true
}else{
    echo "Password length is invalid<br>";//prints if false
}

echo "<br>Using 'pas' as entered data: <br>"; // repeating the same code with invalid data for testing
$password = 'pas';
if(strlen($password)>4 && strlen($password)<10 ){
    echo "Password length is valid<br>";
}else{
    echo "Password length is invalid<br>";
}

echo "<br>Adding test to see if 'password' or 'username' have been entered<br>";
$password = 'password'; // setting $password variable back to 'password'
if($password == 'password'|| $password == 'username'){ // check the $password variable is not set to 'password' or 'username'
    echo "Password is invalid<br>"; // prints if true
}else{
    echo "Password is valid<br>"; // prints if false
}

echo "<br>Using 'wheel' on 'password'/'username' check :<br>";
$password = 'wheel'; // repeating the same code with vaild data for testing
if($password == 'password'|| $password == 'username'){
    echo "Password is invalid<br>";
}else{
    echo "Password is valid<br>";
}

?>
<h3> If/Else exercise </h3> 
<br>
Exercise to calculate updated ticket prices for different discount levels
<br><br>

<?php
/*
 * sets variables and their values to allow the calculations for the exercise
 * $price $age $membership - pre defined data for a user
 * $total - variable to hold the final calculated price
 * $d50 $d25 $d10 - variables to hold the different discount amounts
 */
$price = 25;
$age = 15;
$membership = TRUE;
$total = $price;
$d50 = 50;
$d25 =25;
$d10 =10;
/*
 * code below to create a function perccentageOf() to calculate percentages
 * returns a rounded number with limited decimals
 */
function percentageOf($price, $number, $decimals = 2){
    return round (($price/100) * $number, $decimals);
}

echo "Initial Ticket Price: £".$price; // prints the price of the ticket
echo "<br>Age: ".$age; // prints the users age
echo "<br>Member: "; // prints the title for the membership output
if ($membership == TRUE){ //if to check $membership variable
    echo "YES"; // if the $membership variable returns TRUE prints YES
} else {
    echo "NO"; // if the $membership vairable returns FALSE prints NO
}
echo "<br>Final Ticket Price: £";// prints the title for the discounted ticket

/*
 * if below to check the age of the user and apply the correct discount
 * first check is $age < 12 which then calls the percentageOf() method and the correct discount variable
 * if else for < 18
 * if else for > 65
 */
if ($age<12){ 
    $total = $price - percentageOf($price,$d50);      
} elseif ($age < 18){
    $total = $price - percentageOf($price,$d25);  
} elseif ($age > 65){
    $total = $price - percentageOf($price,$d25);
}
/*
 * second if statement to check the membership variable
 * if $membership is TRUE an extra 10% discount is applied
 * the percentageOf() method is called again with $d10 applied
 */
if ($membership == TRUE) {
    $total = $total- percentageof($price,$d10);
    echo "".$total; // prints the final total with 10% discount applied
} else {
    echo "".$total;// prints the final total
}

?>
<h1> Arrays </h1>

<h3> Simple Arrays </h3>
<br> Simple array creation and output <br>
<?php
/*
 * PHP below to demonstrate simple arrays and exercises
 */

$products = array('t-shirt','cap','mug'); // declares a numeric array $products and adds 3 values
$prices = array('t-shirt' => 9.99,'cap'=>4.99,'mug'=>6.99); //declares an associative array and adds 3 values

print_r($products); // prints the contents of the array
echo '<br>';
$prices[1] = 'shirt';// overwirtes the data in array index [1]
print_r($products); // prints the updated array contents
echo '<br>';
$products[] = 'skirt'; // adds an item to the array
print_r($products); // prints the updated array
echo '<br>';

echo '<br>Items in my products array<br>';// Titles the next output
echo 'The item at index[2] is: ' .$products[2].'<br>';
echo 'The item at index[3] is: ' .$products[3].'<br>';
?>
<h3> Associative Arrays </h3>
Demonstrate basic Associative Arrays<br><br>

<?php
//A new Associative Array declared below for a customer details
$customer = array('CustID'=>12, 'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F');
print_r($customer); // customer array is printed to screen

echo '<br><br>';
$customer['CustAge'] = 27; // changes the value of CustAge
$customer['CustEmail'] = 'sarah@gmail.com'; // adds new data to the array
print_r($customer); // updated array is printed to screen

echo '<br><br>';
echo 'Items in my customer array<br>';// Titles the next output
echo 'The item at index[CustName] is: ' .$customer[CustName].'<br>';
echo 'The item at index[CustEmail] is: ' .$customer[CustEmail].'<br>';
?>
<h3>Multi Dimensional Arrays </h3>
<br> A basic multi-dimensional array is created and printed:<br><br>
<?php
/*
 * code below to demonstrate simple multi dimensional array
 */
$stock = array(
    "id1"=>array(
        "description"=>"t-shirt",
        "price"=>9.99,
        "stock"=>100,
        "colour"=>array('blue','green','red')
        ),
    "id2"=>array(
        "description"=>"cap",
        "price"=>4.99,
        "stock"=>50,
        "colour"=>array('blue','black','grey')
        ),
     "id3"=>array(
        "description"=>"mug",
        "price"=>6.99,
        "stock"=>30,
        "colour"=>array('yellow','green','pink')
        ),
);

print_r($stock); // prints contents of array

echo"<br><br>";
echo "Selecting order items from the array<br><br>";
echo "This is my Order:<br>"; // titles the following output
echo $stock[id1]["colour"][1]." ".$stock[id1]["description"];
echo "<br>Price: £".$stock[id1]["price"];
echo"<br><br>";
echo $stock[id2]["colour"][2]." ".$stock[id2]["description"];
echo "<br>Price: £".$stock[id2]["price"];

?>

<h1> Loops </h1>
<h3>While Loops</h3>
Basic WHILE loop:<br><br>
<?php
/*
 * php below to demonstrtate basic while loops
 */
$counter = 1; // declares the counter variable at 1

while ($counter <6 ){ // while loop to repeat until counter reaches 6
    echo "Count: ".$counter."<br>";// prints the value of counter
    $counter++;// increases the counter by 1
}// exits the loop
echo "<br>";

$shirtPrice = 9.99; // declares variable shirtPrice at 9.99
$counter = 1; // resets the counter variable to one
?>

Use WHILE to output results as a table: <br>
<table> <!--html code to generate the headings for a table -->
<thread>
    <tr>
    <th> Quantity </th>
    <th> Price </th>
    </tr>
</thread>
<tbody>
    
    <?php // php loop to count up to ten, calculating the price and storing in the table
       while ($counter <=10){
           $total=$counter*$shirtPrice;
           echo "<tr><td>$counter</td>";
           echo "<td>£".number_format($total,2)."</td></tr>"; // formatts the number to 2 decimals
           $counter++;
       }?>
       
</tbody> <!-- html code to close the table-->
</table>
<h2>For and ForEach Loops </h2>

Using a FOR EACH loop to iterate over an array and echo the contents: <br>
<?php 
// code to demonstrate simple php for and for each loops
// creates and array of names and prints
$names = array("Peter","Kat","Laura","Ali","Mark");
for($i=0;$i<count($names); $i++){
    echo "".$names[$i]."<br>";
}

echo "<br>";
echo "Updating the same array using FOREACH and echoing out:<br>";
$names = array("Peter"=> "c12345", "Kat"=>"c23456","Laura"=>"c23567","Ali"=>"c67656","Mark"=>"c76876");
foreach ($names as $key=>$value){
    echo "Name: ".$key. " ID: ".$value."<br>";
}

echo "<br>";
echo "Using FOREACH to call functions on arrays:<br>";
// create an array of cities
$city =array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
//prints the array
print_r($city);

echo"<br>";
echo "Calling functions to capitalise the first letters:<br>";
//using FOREACH to apply two funtions to both key and values of array
foreach($city as $key => $value){
    $key = strtolower($key);
    $key = ucfirst($key);
    $value= strtolower($value);
    $value= ucfirst($value);
   $city[$key]=$value;
    }
//prints the updated array
print_r($city);
echo "<br><br>";
?>
<a href= "fundamentalsextended.php">Fundamentals Extension Exercises</a>
<br><br>
<a href= "progresscheck1.php">Progress Check 1</a>
<br><br>
</section>
<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>

</body>

</html>
