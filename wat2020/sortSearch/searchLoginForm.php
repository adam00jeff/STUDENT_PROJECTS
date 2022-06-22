<!-- simple login form to display is $_SESSION['user'] is unset -->

<h3>Login or Register</h3>

<form method="post" action="./searchLogin.php">

<input type="text" name="txtUser" value=''/>

<input type="password" name="txtPass" />

<input type="submit" name="subLogin" value="submit" />

</form>
<br><br>
<a href="../register/register.php">Register a New User</a><br>
