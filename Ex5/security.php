<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Security</title>
</head>
<body>

	<h3>Are you a bot from the future coming to exterminate the human race?<br>
	 And would you like a cool nickname?</h3>
	<form method="POST">
		<input type="submit" name="Yes" value="YES">
	</form>
	<br>
	<form method="POST">
		<input type="submit" name="No" value="NO" id="noButton">
	</form>
</body>
</html>