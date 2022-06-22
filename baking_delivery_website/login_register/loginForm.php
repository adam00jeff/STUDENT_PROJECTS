<!-- simple login form to display is $_SESSION['user'] is unset -->

<h3>Login</h3>

<form method="post" action="loginAction.php">
<label>Email</label>
<input type="text" name="txtEmail" value=''/>
<label>Password</label>
<input type="password" name="txtPass" />

<input type="submit" name="subLogin" value="submit" />
<input type ="button" onclick="location.href='clearForm.php';" value="Clear"/>
</form>
<br><br>
<a href="register.php">Register a New User</a><br>
