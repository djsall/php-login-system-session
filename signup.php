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
<form action="signup" method="post" class="loginForm">
 <input type="text" name="email" placeholder="E-Mail"
				pattern="[A-Za-z0-9\.]{4,40}@[A-Za-z0-9\.-]{2,20}.[A-Za-z]{2,8}" required />
 <input type="text" name="username" placeholder="Username" pattern="[A-Za-z0-9._]{5,40}" required />
 <input type="password" name="password" placeholder="Password" pattern="[A-Za-z0-9\.\*$ß \\\?\/]{4,50}" required />
 <input type="password" name="password2" placeholder="Repeat Password" required>
 <input type="submit" value="Sign up" class="button" />
</form>
<div class="buttonContainer">
 <button id="loginBtn" class="button">Sign in</button>
</div>
</body>
<script>
 document.getElementById("loginBtn").addEventListener("click", () => {
	document.location.replace("/login");
 })
</script>

</html>
