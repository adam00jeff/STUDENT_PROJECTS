<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

?>
<!DOCTYPE html>

<html lang="en">

<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: Forms Extended</title><!--Tab Title-->
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>Forms Extended</h1>
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
<!-- Form to demonstrate various options for capturing and displaying user input
demonstrating various data checks, validation and persistant data
-->
<?php if (isset($_POST['topping'])==false){$_POST['topping']="please select";}
?>
<h1>Order Form</h1>
Form to show the user input from $_POST array, vaildating email input and persistance on all elements<br><br>
<br /> Please fill out this form to place your order. <br />
<form method ="post" action="formsextended.php">
    <fieldset>
        <legend>Enter your login details</legend>
            <label for="userName">User Name:</label><!-- php checks for persistant values-->
            <input type="text" name="userName" id="userName" value="<?php if(isset($_POST['userName'])){echo $_POST['userName'];} ?>" />
            <label for="email">Email:</label><!-- php checks for persistant values-->
            <input type="text" name="email" id="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" />
    </fieldset><fieldset>
        <legend>Pizza Selection</legend>
            <label for="size">Size:</label><!-- php checks for persistant values-->
            <input type="radio" id="small" name="size" <?php if(isset($_POST['size'])&&$_POST['size']=="Small") echo "checked";?> value="Small">
            <label for="small">small</label><!-- php checks for persistant values-->
            <input type="radio" id="medium" name="size"<?php if(isset($_POST['size'])&&$_POST['size']=="Medium") echo "checked";?> value="Medium">
            <label for="medium">medium</label><!-- php checks for persistant values-->
            <input type="radio" id="large" name="size"<?php if(isset($_POST['size'])&&$_POST['size']=="Large") echo "checked";?> value="Large">   
            <label for="large">large</label><br>
            <label for="topping">Topping:</label>
            <select name="topping" id="topping">
                <option value="" selected disabled hidden>Please Select</option><!-- php checks for persistant values-->
                <option <?php if($_POST['topping']=="Margerita") { ?>selected="true" <?php }; ?>value="Margerita">Margerita</option>
                <option <?php if($_POST['topping']=="Salami") { ?>selected="true" <?php }; ?>value="Salami">Salami</option>
                <option <?php if($_POST['topping']=="Seafood") { ?>selected="true" <?php }; ?>value="Seafood">Seafood</option>
            </select><br>
            <label for="extras">Extras:</label><!-- php checks for persistant values-->
            <input type="checkbox" name="parmesan" <?php if(isset($_POST['parmesan'])) echo "checked";?> value="Parmesan">
            <label for="parmesan">Parmesan</label><!-- php checks for persistant values-->
            <input type="checkbox" name="olives" <?php if(isset($_POST['olives'])) echo "checked";?> value="Olives">
            <label for="olives">Olives</label><!-- php checks for persistant values-->
            <input type="checkbox" name="capers" <?php if(isset($_POST['capers'])) echo "checked";?> value="Capers">
            <label for="capers">Capers</label><br>
            <input type="submit" value="Submit" name="orderSubmit"/>
            <input type="reset" value="Clear" />
    </fieldset>
</form>


<?php
//checks form has been submitted before setting variables
if(isset($_POST['orderSubmit'])){
    if(!empty($_POST['userName'])&&!empty($_POST['email'])){
        $userName=$_POST['userName'];
        $email=$_POST['email'];
        $size=$_POST['size'];
        $topping=$_POST['topping'];
       //enters data if options are selected, empty string if they are not
        if(isset($_POST['parmesan'])){$parmesan = "Parmesan";}else{$parmesan = "";}
        if(isset($_POST['olives'])){$olives = "Olives";}else{$olives = "";}
        if(isset($_POST['capers'])){$capers = "Capers";}else{$capers = "";}
            //vaildatesemail input
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<h2>Thank you for your order:</h2> Customer ID:<b>".$userName."</b><br>Email:<b>".$email."</b><br>Your Order:<b>".$size."</b> <b>".$topping."</b><br>Extra Toppings: <b>".$parmesan."</b> <b>".$olives."</b> <b>".$capers."</b>";
            }else{
                //invalid email report to user
                echo "Please enter a vaild email address";
            }
        }else{
            //user feedback
            echo "Please enter Username and Password";
            
        }
}else{
    //do nothing
}


?>



</section>

<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>

</body>

</html>