<!DOCTYPE html>

<html lang="en">

<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: Forms</title><!--Tab Title-->
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>HTML Forms</h1>
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

<?php
//include and display errors on page for testing
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<h1>Processing Input from HTML Forms</h1>
<!-- 
code below to demonstrate use of simple PHP forms
-->
<h2>Login Form using GET</h2>
<!-- comstruction of a basic html form 
sets get method and points action to this page
sets names for user entered values
-->
<form method ="get" action="forms.php" value="">
    <fieldset>
        <legend>Login</legend>
        <label for="email">Email: </label>
        <input type="text" name="txtEmail"/></br> 
        <label for="passwd">Password: </label>
        <input type="password" name="txtPass" /><br>
        <input type="submit" value="Submit" name="loginSubmit" />
        <input type="reset" value="Clear" />
    </fieldset>
</form>
<?php

/* collect data from form and echo back
*  IF to ensure statement only functions after submit is pressed
*/
if(isset($_GET['loginSubmit'])){
    $email=$_GET['txtEmail'];
    $password=$_GET['txtPass'];

    // prints out the data entered in the form
    echo "Email: ".$email." Password: ".$password."</br";
}
?>
<br><h2> Login form using POST </h2>
<!-- Simple form using POST array to collect data from form
uses if(isset to enable contents of form to persist on submit
validates email using filer_var
-->
This form will vaildate email address input and the input will persist <br><br>
<form method="post" action="forms.php" value"">
    <fieldset>
        <legend>Comments</legend>
        <label for="email2">Email: </label>
        <input type="text" name="txtEmail2" value="<?php if(isset($_POST['txtEmail2'])){ echo $_POST['txtEmail2']; } ?>" /><br />
        <textarea rows="4" cols="50" name="txtBox"><?php if(isset($_POST['txtBox'])){ echo $_POST['txtBox'];} ?></textarea><br />
        <label for="confBox">Click to Confirm: </label>
        <input type="checkbox" name="chkBox" value"agree"><br />
        <input type="submit" value="Submit" name="cmntSubmit"/>
        <input type="reset" value="Clear" />
    </fieldset>
</form>

<?php

/* collect data from form and echo back
*  IF to ensure statement only functions after submit is pressed
*/

if(isset($_POST['cmntSubmit'])){
    if(!empty($_POST['txtEmail2'])){ // checks email field is not empty
        $email2=$_POST['txtEmail2'];
        if(filter_var($email2, FILTER_VALIDATE_EMAIL)){ // checks data in email field is vaild email
        $text=$_POST['txtBox'];
        
           if (isset($_POST['chkBox'])){ // applies the checkbox variable 
                $confirm='Agreed <br />';
            }else{
                $confirm='Not Agreed <br />';
            } 
        echo "<br />Email: ".$email2."<br /> Comments: ".$text."<br />Confirm: ".$confirm;
    }else{
        echo("$email2 is not a valid email address"); // return for invalid email
    }

    }else{
        echo "Email must not be empty";// return for empty email field
    }
}

?>
<br>
<h2>Tax Calculator</h2>

<!-- Tax Calculation form to demonstrate forms with PHP 
data is entered by the user, checks are performed and the result is calculated and output
-->
Checks user input is not empty and is in the formatt ##.##<br>
then calculates the price before tax.<br><br>
    <form method="get" action="forms.php" value"">
        <fieldset>
            <legend>Without Tax Calculator</legend>
            <label for="afterPrice">After Tax Price:</label><br>
            <input type="text" id="afterPrice" name="afterPrice" value="<?php if(isset($_GET['afterPrice'])){ echo $_GET['afterPrice'];} ?>"/><br>
            <label for="taxRate">Tax Rate:</label><br>
            <input type="text" id="taxRate" name="taxRate" value="<?php if(isset($_GET['taxRate'])){ echo $_GET['taxRate'];} ?>"/><br>
            <input type="submit" value="Submit" name="taxSubmit"/>
            <input type="reset" value="Clear"/>
        </fieldset>
    </form>
    
<?php
/*code below to perform checks and validation on entered data
 * 
 */
if (isset($_GET['taxSubmit'])){ // if to ensure nothing is attempted before submit is pressed
    $after=$_GET['afterPrice'];
    $rate=$_GET['taxRate'];
        if(!empty($after)&&!empty($_GET['taxRate'])) { // if to check the fields are not empty
            if (filter_var($rate, FILTER_VALIDATE_INT)){ // checks the rate is a whole number
                if (preg_match('/^\d+(:?[.]\d{2})$/', $after)){// checks the after tax is in the formatt 00.00
                    $calc=(100*$after)/(100+$rate); // calculates the tax
                    $before="Price before Tax = £".$calc;
                } else {
                    $before = "Please enter the price in the format 9.99";
                }
            }else {
                $before = "Please enter Tax Rate as a whole number";
                }    
    }else{
        $before ="All Fields Required"; 
    }

}else{
        $before ="Price before Tax = £";
    }


?>
<h3><?php echo $before ?> </h3> <!-- returns the calculation or error to user -->
<br>


<h1>Passing Data Appended to an URL</h1>
links will store a value in the $cat variable on forms.php and display<br><br>
<h2>Pick a category</h2>

<a href=" forms.php?cat=Films">Films</a>

<a href=" forms.php?cat=Books">Books</a>

<a href=" forms.php?cat=Music">Music</a>
<br>
<?php
if (isset($_GET['cat'])){
    echo "The category chosen is ".$_GET['cat'];
}
?>
<br>
<h1> Further Work with Forms </h1>
<a href="formsextended.php">Forms Extension Exercise</a>
<br>
<a href="progresscheck2.php">Progress Check 2 </a>
<br>
<br>

</section>

<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>

</body>

</html>