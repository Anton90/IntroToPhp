<?php 
session_start();

function securityPage() {
	print <<< SEC

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Security</title>
</head>
<body class = "m-3">
	<h3>Are you a bot from the future coming to exterminate the human race?<br>
	 And would you like a cool nickname?</h3>
	<form method="POST">
		<input type="radio" name="Yes" value="YES"> Yes
		<input type="radio" name="No" value="NO" > No
		<input type="submit" name="submit">
	</form>
</body>
</html>

SEC;
};
 ?>
