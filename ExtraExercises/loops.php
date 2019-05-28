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
			echo ($test == "He/She") ? "$test codes<br>" : "$test code<br>";
		}
		echo "<br>";

		$number = 1;

		while($number <= 120) {
			echo " $number ";
			$number++; 
		}

		echo "<br>"; 
		echo "<br>";

		for ($i = 1; $i <= 120; $i++) {
			echo " $i "; 
		}
		echo "<br>"; 

		
	 ?>
	 <select name="country">
	 	<?php 
	 		$countries = [
				'BE' =>'Belgium',
				'FR' =>'France',
				'GE' =>'Germany',
				'ESP' =>'Spain',
				'PO' =>'Portugal',
				'IN' =>'India',
				'CH' =>'China',
				'RUS' =>'Russia',
				'US' =>'USA',
				'DE' =>'Denmark'
		]; 

	 		foreach ($countries as $iso => $country) {
	 			echo "<option value='$iso'>$country</option>"; 
			}
	 	 ?>

	 </select>
		

</body>
</html>