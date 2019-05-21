<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nickname Result</title>
</head>
<body>
	<?php 
	$nickname = $_POST['nickname'];

	echo $nickname;
	echo '<br>'; 
	echo strrev($nickname);
	echo '<br>'; 
	echo strtoupper($nickname); 
	echo '<br>'; 
	echo $nickname; 
	echo '<br>';
	echo "--" . $nickname . "--"; 
	


	echo "<br><a href='nickname.php'>Back</a>";
	 ?>
</body>
</html>