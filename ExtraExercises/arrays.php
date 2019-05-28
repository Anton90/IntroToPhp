<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays</title>
</head>
<body>
	<?php 
		$team = array();
			$team[0] = 'Vincent Company';
			$team[1] = 'Eden Hazard';
			$team[2] = 'Manneken Pis';

		$cars = [ 
			"BMW",
			"Mercedes",
			"Mclaren"
		];

		var_dump($cars);
		$cars[] = "Porsche";
		echo "<br>"; 
		var_dump($cars); 

		$me = [
			"age" => 29,
			"firstName" => "Anton",
			"lastName" => "Everaert",
			"favoriteMovies" => array("MIB", "Focus", "Avatar", "The Greatest Showman")
			
		];

		$me["hobbies"] = array("Running", "Reading", "Fitness", "Computer");

		$mother = [
			"age" => 65,
			"firstName" => "Annie",
			"lastName" => "Vander Elstraeten",
			"favoriteMovies" => array("bla", "blo", "blu"),
			"hobbies" => array("Walking", "Reading", "Gardening")
		];

		$soulmate = [
			"age" => 28,
			"firstName" => "Myrthe",
			"lastName" => "Herregodts",
			"favoriteMovies" => array("Bad Boys", "Avengers", "The Greatest Showman"),
			"hobbies" => array("Fitness", "Solving puzzles", "Chilling")
		];

		$me['hobbies'][] = "Taxidermy"; 
		$me['mother'] = $mother; 
		$me['lastName'] = "Durand"; 




		$totalHobbies = count($me['hobbies']) + count($mother['hobbies']); 
		$arrayIntersect = array_intersect($me['hobbies'], $soulmate['hobbies']);
		$arrayMerge = array_merge($me['hobbies'], $soulmate['hobbies']); 
 


		echo "<br>";
		echo count($me['hobbies']);
		echo "<br>"; 
		echo count($mother["hobbies"]);
		echo "<br>";
		echo $totalHobbies;
		echo "<br>";
		print_r($arrayIntersect);
		echo "<br>";
		print_r($arrayMerge);    

		echo "<pre>";
		print_r($me);
		print_r($mother); 
		echo "</pre>"; 


		$webDevelopment = [
				'frontend' => [],
				'backend' => []
		];

		$webDevelopment["frontend"][] = 'Xhtml';
		$webDevelopment["frontend"][] = 'CSS';
		$webDevelopment["frontend"][] = 'Javascript';

		$webDevelopment["backend"][] = 'Ruby on Rails'; 
		$webDevelopment["backend"][] = 'Flash'; 

		echo "<pre>";
		print_r($webDevelopment);
		echo "</pre>"; 

		$webDevelopment["frontend"][0] = 'Html'; 
		unset($webDevelopment['backend'][1]); 
	


		echo "<pre>";
		print_r($webDevelopment);
		echo "</pre>";


	 ?>
</body>
</html>