<?php
if (isset($_GET['page'])) {
 $requested_page = $_GET['page'];
}
else {
 $requested_page = 'login';
}
// a better way would be to put this into an array, but I think a switch is easier to read for this example
switch($requested_page) {
 case "login":
	include(__DIR__."/login.php");
	break;
 case "signup":
	include(__DIR__."/signup.php");
	break;
 case "logout":
  include(__DIR__."/logout.php");
  break;
 case "dashboard":
  include (__DIR__."/dashboard.php");
  break;
 default:
	include(__DIR__."/index.php");
}