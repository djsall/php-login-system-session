<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/login.css" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Sign in</title>
</head>

<body>
	<form action="login.php" method="post" class="loginForm">
		<input type="text" name="username" placeholder="Username" required />
		<input type="password" name="password" placeholder="Password" required />
		<input type="submit" value="Login" name="loginBtn" class="button" />
	</form>
	<div class="buttonContainer">
		<button id="signupBtn" class="button">Sign up</button>
	</div>
</body>
<script>
document.getElementById("signupBtn").addEventListener("click", () => {
 document.location.replace("/signup.php");
})
</script>

</html>
<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'test');

if(isset($_SESSION['username'])){
 header('Location: /dashboard.php');

}elseif (isset($_REQUEST['loginBtn'])){
	$username = mysqli_escape_string($con, $_POST['username']);
	$password = mysqli_escape_string($con, $_POST['password']);

	$query = mysqli_query($con, 'SELECT * FROM users WHERE username="' . $username . '" AND password="' . $password . '";');

	if(mysqli_num_rows($query) == 1) {
	 $_SESSION['username'] = $username;
	}
}
