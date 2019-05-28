<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conditions</title>
</head>
<body>



	<?php 
		$today = date("H:i"); 
		echo $today; 
		echo "<br>"; 


		if ($today > "05:00" && $today < "09:00") {
			echo 'Good morning !'; 
		} else if ($today > "09:01" && $today < "12:00") {
			echo "Good day !"; 
		} else if ($today > "12:01" && $today < "16:00") {
			echo "Good afternoon !"; 
		} else {
			echo "Good evening!"; 
		}

		echo "<br>"; 
	?>

	<!-- PART 6 -->

		<div>
		<form method="GET">
			<input type="text" name="age">
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="submit">
		</form>
	</div>
	
	<?php 
		 $age = $_GET['age'];
		 $gender = $_GET['gender']; 

		 // if ($gender == 'female' && $age > 21 && $age < 40) {
		 // 	echo "Welcome to the team !"; 
		 // } else {
		 // 	echo "Sorry you don't fit the criteria"; 
		 // }

		 // echo ($gender == 'female' && $age > 21 && $age < 40) ? 
		 // 	"Welcome to the team !" : "Sorry you don't fit the criteria";

		 switch ($gender) {
		 	case 'female' :
		 		if ($age > 21 && $age < 40){
		 			echo "Welcome to the team !";
		 		} else {
		 			echo "Sorry you don't fit the criteria";
		 		}
		 		break;
		 	case 'male' :
		 		echo "Sorry you don't fit the criteria";
		 		break;
		 }

	 ?>
</body>
</html>