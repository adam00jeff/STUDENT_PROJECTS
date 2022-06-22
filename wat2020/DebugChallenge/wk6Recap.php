<?php

include 'showErrors.php';

?>

<!DOCTYPE html>

<html>

<head>

<link type="text/css" rel="stylesheet" href=""/>

<title>Result</title>

</head>

<body>

<h1>Insert a record</h1>

<form method="post" action="wk6Insert.php">
<lable for="txtName">Name</label>

<input type="text" name="txtName" />

<br />
<label for="txtCategory">Category</label>
<input type="text" name="txtCategory" />

<br />

<input type="submit" value="Submit" name="subEvent" />

</form>
<br>

<?php

//display results

include 'wk6Select.php';

?>

</body>

</html>