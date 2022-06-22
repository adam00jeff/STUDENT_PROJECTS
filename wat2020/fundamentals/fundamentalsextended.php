<!DOCTYPE html>

<html lang="en">

<head>
<link href="../CSS/response.css" rel="stylesheet"/> <!--stylesheet link-->
<title>WAT: Fundamentals</title><!--Tab Title-->
</head>

<body>
<div id="pagewrap"> <!-- adds css border to section-->
<section id="headersmall">
<small>Adam Jeffreson C3263312</small>
<h1>Fundamentals Extended</h1>
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

<h2>Some Useful Functions:</h2>
<br>Declare and output a password variable as pass:<br>
<?php
$password = "pass";
echo "Password is ".$password."<br>";

echo "<br>Use IF/ELSE and isset() to check password is set: <br>";

if (isset($password)){
    echo "Password OK";
} else {
    echo "Please enter a password";
}

echo "<br><br> setting the password variable to NULL and run again: <br>";
$password =null;
if (isset($password)){
    echo "Password OK";
} else {
    echo "Please enter a password";
}

echo "<br><br> Extending the test to check if the variable is set and is not empty: <br>";
$password =pass;
if (isset($password)){
    if (!empty($password)){
        echo "Password OK";
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}

echo "<br><br> Setting password to NULL: <br>";
$password =null;
if (isset($password)){
    if (!empty($password)){
        echo "Password OK";
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}

echo "<br><br> Setting password to an empty string (\" \"): <br>";
$password ="";
if (isset($password)){
    if (!empty($password)){
        echo "Password OK";
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}

echo "<br><br> Adding strlen() checks to ensure password is >6 and <=8: <br>";
$password ="password";
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          echo "Password accepted";
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
echo"<br><br> Testing all outputs:<br>";
$password ="pass";
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          echo "Password accepted";
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
echo"<br><br>";
$password ="passwordlong";
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          echo "Password accepted";
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
echo"<br><br>";
$password ="";
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          echo "Password accepted";
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
echo"<br><br>";
$password =null;
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          echo "Password accepted";
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
echo"<br><br>";
echo "adding an IF statment to check isnumeric()<br>";
$password =password;
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          if (!is_numeric($password)){
            echo "Password accepted";
          }else{
             echo "Password must not be Numeric";
          }
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
echo"<br><br>";
echo "Testing with password = 99999999<br>";
$password ="99999999";
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          if (!is_numeric($password)){
            echo "Password accepted";
          }else{
             echo "Password must not be Numeric";
          }
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
echo"<br><br>";
echo "Current system allows \"pass   \" as vaild (pass followed by 3 spaces):<br>";
$password ="pass   ";
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          if (!is_numeric($password)){
            echo "Password accepted";
          }else{
             echo "Password must not be Numeric";
          }
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
echo"<br><br>";
echo "Adding the trim() function when variable is assigned :<br>";
$password ="pass   ";
$password = trim($password);
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          if (!is_numeric($password)){
            echo "Password accepted";
          }else{
             echo "Password must not be Numeric";
          }
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
echo"<br><br>";
echo "This is still vunerable to command injection:<br>";
//sting holder for output to html page
$placeholder = "<script>alert('You have been hacked')</script>";
$placeholder = htmlentities($placeholder);
echo "Setting password to: ".$placeholder."allows a pop up to be generated<br><br>";
echo "--this test is commented out to prevent pop-up triggering on page refresh--<br><br>";
/*$password = "<script>alert('You have been hacked')</script>";
$password = trim($password);
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          if (!is_numeric($password)){
            echo "Password accepted";
          }else{
             echo "Password must not be Numeric";
          }
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
*/
echo"<br><br>";
echo "Adding the htmlentities() function to replace special characters:<br>";
$password ="<script>alert('You have been hacked')</script>";
$password = trim($password);
$password = htmlentities($password);
echo "<br>password variable after funtions & before checks: ".$password."<br><br>";
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          if (!is_numeric($password)){
            echo "Password accepted";
          }else{
             echo "Password must not be Numeric";
          }
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
echo"<br><br>";
echo "The password can now be encrypted for storage:<br><br>";
$password ="password";
$password = trim($password);
echo "The password is: ".$password."<br>";
if (isset($password)){
    if (!empty($password)){
      if(strlen($password) <6){
          echo "Password must be more than 6 characters";
      } elseif (strlen($password) >8){
          echo "Password cannot be longer than 8 characters";
      }else{
          if (!is_numeric($password)){
             echo "Password accepted";
            $cryptpass = md5($password);
            echo "<br>encrypted password: ".$cryptpass;
          }else{
             echo "Password must not be Numeric";
          }
      }    
    } else {
        echo "Password must not be empty";
    }
} else {
    echo "Please enter a password";
}
?>
</section>
<footer>

<small> <a href="../watIndex.html">Home</a></small>

</footer>

</body>

</html>