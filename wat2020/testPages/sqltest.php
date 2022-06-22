<!DOCTYPE html>

<html lang="en">
<body>


<?php

?>


this is a test page<br><br>
this is a form <br>
this form will store, a number, either 'A','B', or 'C' and a calculated number.<br><br>

<!--PHP if to prevent PHP isset() check on select finding an empty array location
<?php if (isset($_POST['selTest'])==false){$_POST['selTest']="a default";}?> -->
<form method="post" action="sqltest.php">
    <fieldset>
        <legend>This is a test form to capture data</legend>
            <label for="textEntry">Enter Some Text:</label>
            <input type="text" name="txtEntry"/><br>
            <label for="numbEntry">Enter Some Numbers:</label>
            <input type="number" name="numEntry"/><br>
            <label for="selectTest">Please Select one:</label><!-- php checks for persistant values commented out-->
            <select name="selTest" id="selTest">
                <option value="" selected disabled hidden>Disabled Default</option>
                <option value="A">Option A</option> <!--<?php if($_POST['selTest']=="A") { ?>selected="true" <?php }; ?> -->
                <option value="B">Option B</option>
                <option value="C">Option C</option>
            </select><br>
            <label for="radTest">Radio Buttons:</label><br>
                <label for="radTestOne">+1 to result</label><!-- php checks for persistant values commented out-->
                <input type="checkbox" name="chkOne" value="1"/><br> <!--  <?php if(isset($_POST['chkOne'])) echo "checked";?> -->
                <label for="redTestTwo">+15 to result</label>
                <input type="checkbox" name="chkTwo" value="15"/><br> 
                <label for="radTestThree">+7 to result</label>
                <input type="checkbox" name="chkThree" value="7"/><br>
            <input type="submit" value="Submit" name="testSubmit"/>
            <input type="reset" value="Clear" />
      </fieldset>
</form>
<br><br>
Store Values from the Form:<br>
<!--PHP to store form data and return-->
<?php
if(isset($_POST['testSubmit'])){ /*PHP if to make sure nothing is done until form is sent*/
    if(!empty($_POST['txtEntry'])&&!empty($_POST['numEntry'])){ /* PHP to make sure there is some data for text and number */
        //store the data from the form as variables
        $text = $_POST['txtEntry'];
        $numb = $_POST['numEntry'];
        $select = $_POST['selTest'];
        $counter = 0;//counter variable to hold button result
        //if statments to check if radio buttons are selected
            if(isset($_POST['chkOne'])){$counter = $counter +1;}
            if(isset($_POST['chkTwo'])){$counter = $counter +15;}
            if(isset($_POST['chkThree'])){$counter = $counter +7;}
        //echo out form contents
        echo "This is the text:".$text."<br>This is the Number:".$numb."<br>This is the Option: ".$select."<br>This is the radio result:".$counter."<br>";
    } else {
        echo "please enter some text and a number";
    }
} else {
    // do nothing, form not submitted
}         
?>
<br> Same form below, this will insert the data to the MySQL table "testTable" <br><br>

<form method="post" action="insertTest.php">
    <fieldset>
        <legend>This data will be sent to a database</legend>
            <label for="textEntry">Enter Some Text:</label>
            <input type="text" name="txtEntryIns"/><br>
            <label for="numbEntry">Enter Some Numbers:</label>
            <input type="number" name="numEntryIns"/><br>
            <label for="selectTest">Please Select one:</label><!-- php checks for persistant values commented out-->
            <select name="selTestIns" id="selTest">
                <option value="" selected disabled hidden>Disabled Default</option>
                <option value="A">Option A</option> <!--<?php if($_POST['selTest']=="A") { ?>selected="true" <?php }; ?> -->
                <option value="B">Option B</option>
                <option value="C">Option C</option>
            </select><br>
            <label for="radTest">Radio Buttons:</label><br>
                <label for="radTestOne">+1 to result</label><!-- php checks for persistant values commented out-->
                <input type="checkbox" name="chkOneIns" value="1"/><br> <!--  <?php if(isset($_POST['chkOne'])) echo "checked";?> -->
                <label for="redTestTwo">+15 to result</label>
                <input type="checkbox" name="chkTwoIns" value="15"/><br> 
                <label for="radTestThree">+7 to result</label>
                <input type="checkbox" name="chkThreeIns" value="7"/><br>
            <input type="submit" value="Submit" name="insertTestSubmit"/>
            <input type="reset" value="Clear" />
      </fieldset>
</form>
<br><br>
This is the data from the database : <br><br>
<?php include 'selectTest.php'; ?>

<br>
<a href="selectTest.php">Direct Link to Select Statement</a>
<br>
<br>




<small> <a href="../watIndex.html">Home</a></small>



</body>

</html>