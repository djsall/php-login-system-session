<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="css/login.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Dashboard</title>
</head>

<body>
<div class="buttonContainerNc">
 <button id="logoutBtn" class="button left">Log out</button>
</div>
</body>
<script>
 document.getElementById("logoutBtn").addEventListener("click", () => {
	document.location.replace("/logout.php");
 })
</script>

</html>