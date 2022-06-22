<!DOCTYPE html>

<html lang="en">
<?php session_start();
?>
<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: Register</title><!--Tab Title-->
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>Register</h1>
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
Form to capture user information into the users table<br>
data is validated and sanitised, passwords are encrypted <br><br>
registered users have access to the search page<br>
the clear button calls clearForm.php to unset $_SESSION persistence<br><br>

<!-- form to capture new user information#
form data will perist if completed, and report errors on input
checks are performed on email and password fields
passwords are encrypted

-->
<form method="post" action="registerUser.php" autocomplete="on">
   <fieldset>
        <legend>Enter User Details: </legend><br>
        <label for="txtName">User Name:</label><br>
        <input type="text" name="txtName" id="txtName" value="<?php
        if(isset($_SESSION['persist']['name'])){
            echo $_SESSION['persist']['name'];
        }
        ?>" />
        <span>
        <?php
        if(isset($_SESSION['errors']['name'])){
            echo $_SESSION['errors']['name'];
        }
        ?>       
        </span><br>
        
        <label for="txtEmail">Email:</label><br>
        <input type="text" name="txtEmail" id="txtEmail"  value="<?php
        if(isset($_SESSION['persist']['email'])){
            echo $_SESSION['persist']['email'];
        }
        ?>" /><span>
         <?php
        if(isset($_SESSION['errors']['email'])){
            echo $_SESSION['errors']['email'];
        }
        ?>       
        </span><br>
        
        <label for="txtPassword">Password:</label><br> 
        <input  type="password" name="txtPass" id="txtPass"   value="" /><span>
                 <?php
        if(isset($_SESSION['errors']['pass'])){
            echo $_SESSION['errors']['pass'];
        }
        ?>       
        </span><br><br>
                   
        <label for "selAge">Age:</label>
        <select name="selAge" id="selAge"> <br>
            <option value="" selected disabled hidden>Please Select</option>
            <option <?php if($_SESSION['persist']['age']=="under18") { ?>selected="true" <?php }; ?>value="under18">Under 18</option>
            <option <?php if($_SESSION['persist']['age']=="18-25") { ?>selected="true" <?php }; ?>value="18-25">18-25</option>
            <option <?php if($_SESSION['persist']['age']=="26-40") { ?>selected="true" <?php }; ?>value="26-40">26-40</option>
            <option <?php if($_SESSION['persist']['age']=="41-60") { ?>selected="true" <?php }; ?>value="41-60">41-60</option>
            <option <?php if($_SESSION['persist']['age']=="over60") { ?>selected="true" <?php }; ?>value="over60">Over 60</option>
         </select><span>
         <?php
        if(isset($_SESSION['errors']['age'])){
            echo $_SESSION['errors']['age'];
        }
        ?>       
        </span>
        <br><br>
        <label for="chkTerms">Click to Confirm:</label>
        <input type="checkbox" name="chkTerms" id="chkTerms" <?php if(isset($_SESSION['persist']['chk'])) echo "checked"; ?> value="checked">
         <?php
        if(isset($_SESSION['errors']['chk'])){
            echo $_SESSION['errors']['chk'];
        }
        ?>       
        </span>  
    </fieldset>    
    <input type="submit" value="Submit" name="subUser"/>
    
    <input type ="button" onclick="location.href='clearForm.php';" value="Clear"/>
    
</form>

<?php
if(isset($_SESSION['register'])){
    echo $_SESSION['register'];
} 
?>


</section>

<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>

</body>

</html>

