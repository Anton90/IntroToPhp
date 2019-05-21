<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nickname Result</title>
</head>
<body>
	<?php 
	$nickname = $_POST['nickname'];

	function randomString($length = 4) {
		$str = "";
		$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		$max = count($characters) - 1;

		for ($i = 0; $i < $length; $i++) 
		{
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str;
	}

	function randomUppercase($string) {

		for ($i = 0; $i < strlen($string); $i++) {
			if (ctype_lower($string[$i])) {
				if (rand(1,2) == 1) {
					echo strtoupper($string[$i]); 
				} else {
					echo $string[$i]; 
				} 
			} else {
				echo strtolower($string[$i]); 
			}
		}	
	}

	


	function addGradient($string) {
		$colorRandom = rand(0,360);  
	
		for ($i = 0; $i < strlen($string); $i++) {
			$color = $colorRandom + $i*20; 
			echo  "<span style='color: hsl($color, 100%, 50%);'>" . $string[$i] . "</span>"; 
		}
	}


	 

	echo $nickname;
	echo '<br>'; 
	echo strrev($nickname);
	echo '<br>'; 
	echo strtoupper($nickname); 
	echo '<br>'; 
	echo $nickname; 
	echo '<br>';
	echo "--" . $nickname . "--"; 
	echo '<br>';
	echo "x" . $nickname;
	echo '<br>';
	echo str_shuffle($nickname); 
	echo '<br>';
	echo randomstring() . $nickname; 
	echo '<br>';
	echo "[" . randomstring(). "]" . $nickname; 
	echo '<br>';
	echo randomUppercase($nickname); 
	echo '<br>';
	echo addGradient($nickname); 


	

	echo '<br>';
	echo "<br><a href='nickname.php'>Back</a>";
	 ?>
</body>
</html>