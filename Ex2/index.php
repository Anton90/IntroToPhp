<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>
	<?php 

		$output1 = $_SESSION['lotteryArray']; 
		$winner = rand(0,4);
		$choice = $_POST["lotteryOption"];

	echo "This is your choice: $output1[$choice]";
	echo "<br>"; 
	echo "Winning icon: $output1[$winner]";
	echo "<br>";  

	if ($_POST["lotteryOption"] == $winner) {
		echo "<br><b>You are a winner!</b><br>Want to play again?<br><a href='lottery.php'>Click here!</a>";
		} else {
			echo "<br>Sorry, you lose! :(<br>Want to play again?<br><a href='lottery.php'>Click here!</a>"; 
		}
	 ?> 
	
</body>
</html>