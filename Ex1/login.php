<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
<?php 
	$username = "Anton9";
	$password = "RandomPass"; 

	if ( $_POST["login"] == $username && $_POST["pass"] == $password) {
		echo ("Hello $username");
	} else {
		echo ("Wrong password or username"); 
	}
?>	
</body>
</html>