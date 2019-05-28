<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops</title>
</head>
<body>
	<?php 
		$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

		foreach($pronouns as $test) {
			echo "$test <br>"; 
		}

	 ?>
</body>
</html>