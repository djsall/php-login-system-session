<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="css/login.css" />
 <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 <title>Sign up</title>
</head>

<body>
<form action="signup.php" method="post" class="loginForm">
 <input type="text" name="email" placeholder="E-Mail"
				pattern="[A-Za-z0-9\.]{4,40}@[A-Za-z0-9\.-]{2,20}.[A-Za-z]{2,8}" required />
 <input type="text" name="username" placeholder="Username" pattern="[A-Za-z0-9._]{5,40}" required />
 <input type="password" name="password" placeholder="Password" pattern="[A-Za-z0-9\.\*$ß \\\?\/]{4,50}" required />
 <input type="password" name="password2" placeholder="Repeat Password" required>
 <input type="submit" value="Sign up" class="button" name="signupBtn" />
</form>
<div class="buttonContainer">
 <button id="loginBtn" class="button">Sign in</button>
</div>
</body>
<script>
 document.getElementById("loginBtn").addEventListener("click", () => {
	document.location.replace("/login.php");
 })
</script>

</html>
<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'test');

if(isset($_SESSION['username'])){
 header('Location: /dashboard.php');
 
}
elseif (isset($_REQUEST['signupBtn']) && !isset($_SESSION['username'])){
	$email = mysqli_escape_string($con, $_REQUEST['email']);
	$username = mysqli_escape_string($con, $_REQUEST['username']);
	$password = mysqli_escape_string($con, $_REQUEST['password']);
	$password2 = mysqli_escape_string($con, $_REQUEST['password2']);
	
	$checkUser = mysqli_num_rows(mysqli_query($con, 'SELECT * FROM users WHERE username="' . $username . '";'));
	$checkEmail = mysqli_num_rows(mysqli_query($con, 'SELECT * FROM users WHERE email="' . $email . '";'));
	
	if($password != $password2){
	 	echo 'Nem egyeznek a megadott jelszavak';
	}elseif($checkUser > 0) {
	 	echo "Már létezik ilyen felhasználónév!";
	}elseif($checkEmail > 0) {
		echo "Ez az E-Mail cím már használatban van!";
	}else {
	 	mysqli_query($con, 'INSERT INTO users (email, username, password) VALUES ("' . $email . '", "' . $username . '", "' . $password . '");');
	 	header('Location: /index.php');
	}
	
}