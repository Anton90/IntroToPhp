<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="../bootstrap.css">
</head>
<body>
	<div class="container m-2 d-flex justify-content-center">
		<form action="game.php" method="post">
			<input type="submit" name="toGame" value="Start Blackjack!">
		</form>
	</div>
	
</body>
</html>