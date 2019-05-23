<?php 
session_start();
setcookie("cookieCar");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays</title>
</head>
<body>
<?php 
	$cars = [
		"Mclaren",
		"Ferrari",
		"Lamborghini",
		"Porsche"
	];

	$scoreCars = [
		"Bmw" => 7,
		"Mercedes" => 8,
		"Audi" => 9,
		"Seat" => 8
	]; 

	$carsSpec = (object) [
		"Color" => "red",
		"Weight" => "heavy"
	]; 

	for ($i=0; $i < 1; $i++) {

		array_push($cars, "Maserati");
		$scoreCars['Opel'] = 5; 
		$carsSpec->$i = 'newProperty';
	}

	for ($i=0; $i < 3; $i++) {
		if (rand(0,5) == 1) {
			$cars[rand(0,5)] = "NewCar";
		} 

		if (rand(0,5) == 2) {
			$scoreCars[rand(0,4)] = "NewScore";
			$scoreCars["NewScore"] = rand(0,10); 	 
		}

		if (rand(0,5) == 3) {
			$carsSpec->$i = 'randomProperty'; 
		} 
	}

	$carsCount = count($cars);
	$carsHalf1 = array_slice($cars,0, $carsCount/2);
	$carsHalf2 = array_slice($cars, $carsCount/2);



	var_dump($cars);
	echo "<br>";
	echo "<br>";
	var_dump($scoreCars);
	echo "<br>";
	echo "<br>";
	array_pop($scoreCars);
	var_dump($scoreCars);
	echo "<br>";
	echo "<br>";
	var_dump($carsSpec); 
	echo "<br>";
	echo "<br>";
	var_dump($carsHalf1);  
	echo "<br>";
	echo "<br>";
	var_dump($carsHalf2); 
	echo "<br>";
	echo "<br>";


	$carsSpec->arr1 = $carsHalf1;
	$carsSpec->arr2 = $carsHalf2; 

	var_dump($carsSpec); 
	echo "<br>";
	echo "<br>";

	foreach($scoreCars as $x => $item) {
		$carsSpec->$x = $item;
	}

	var_dump($carsSpec); 
	echo "<br>";
	echo "<br>";
	echo "<pre>";
	print_r($carsSpec);
	echo "</pre>";
	echo "<br>"; 
	
	//$_COOKIE["cookieCar"] = serialize($carsSpec); 
	$_SESSION['sessionCar']= json_encode($carsSpec);

	//echo $_COOKIE["cookieCar"]; 
	echo $_SESSION['sessionCar'];

	

?>
<a href="../Ex5/home.php">Link</a>
</body>
</html>