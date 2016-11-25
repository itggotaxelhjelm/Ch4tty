<meta charset="UTF-8">
<h1>Ch4tty</h1>
<form action="index.php" id="form" method="post">
	<input type="text" name="user" placeholder="Write user here!"> <br/>
	<input type="password" name="password" placeholder="Write password here">
	<input type="submit" name="login" value="Log in">
</form>


<?php
session_start();

//Login Form
if(isset($_POST['login'])) //kollar om login finns i urln
{
	$user = $_POST['user'];
	$password = $_POST['password'];

	$correctUser = 'Axel';
	$correctPassword = '123';

	if($user == $correctUser && $password == $correctPassword)
	{
		$_SESSION['login'] = 'ok';
		header('location: homepage.php');
	}
	else
	{
		echo "The username or password doesn't match";
	}
}

?>