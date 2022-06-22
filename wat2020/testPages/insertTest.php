<?php

//Make connection to database

include 'connection.php';

//Gather from $_POST[]all the data submitted from sqltest.php and store in variables

if(isset($_POST['insertTestSubmit'])){ /*PHP if to make sure nothing is done until form is sent*/
    if(!empty($_POST['txtEntryIns'])&&!empty($_POST['numEntryIns'])){ /* PHP to make sure there is some data for text and number */
        //store the data from the form as variables
        $text = $_POST['txtEntryIns'];
        $numb = $_POST['numEntryIns'];
        $select = $_POST['selTestIns'];
        $counter = 0;//counter variable to hold button result
        //if statments to check if radio buttons are selected
            if(isset($_POST['chkOneIns'])){$counter = $counter +1;}
            if(isset($_POST['chkTwoIns'])){$counter = $counter +15;}
            if(isset($_POST['chkThreeInsIns'])){$counter = $counter +7;}
        //echo for testing here
    } else {
        echo "please enter some text and a number";
    }
} else {
    // do nothing, form not submitted
}         
//INSERT query using variables holding data gathered

$query="INSERT INTO testTable 
(Text,Number,Selection,Sum) 
VALUES 
('$text', '$numb', '$select','$counter')";

//Temporarily echo $query for debugging purposes

/*echo $query;
exit();
*/

//run $query

mysqli_query($connection, $query);

/* code to report succesful insertion if required
if(mysqli_query($connection, $query)){

echo "Record inserted successfully.";

} else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
*/
//header call to relocate
header('location:sqltest.php');

?>
