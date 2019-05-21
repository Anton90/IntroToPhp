<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>
	<?php 
		$output = [
			"\u{1F355}",
			"\u{1F35f}",
			"\u{1F354}",
			"\u{1F352}",
			"\u{1F353}",
		];

		$winner = rand(0,4);

	echo "This is your choice:";
	echo $output[$_POST["lotteryOption"]]; 
	echo "<br>"; 
	echo "Winning icon: ";
	echo $output[$winner];
	echo "<br>";  

	if ($_POST["lotteryOption"] == $winner) {
		echo "<br><b>You are a winner!</b><br>Want to play again?<br><a href='lottery.php'>Click here!</a>";
		} else {
			echo "<br>Sorry, you lose! :(<br>Want to play again?<br><a href='lottery.php'>Click here!</a>"; 
		}



	 ?> 
	
</body>
</html>