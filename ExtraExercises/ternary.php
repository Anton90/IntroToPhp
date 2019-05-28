<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ternary Operator</title>
</head>
<body>

	<form action="" method="get">
		<input type="radio" name="gender" value="M">Male
		<input type="radio" name="gender" value="F">Female
		<input type="submit">
	</form>

	<?php  
		$hello = ["Welcome awesome boy!", "Welcome awesome girl!"];
		$gender = ['M', 'F']; 

		echo ($_GET['gender'] == $gender[0]) ? $hello[0] : $hello[1];
	?>

	<h2>Part 2</h2>

	<form action="" method="get">
		<p>Are you a human, a cat or a unicorn?</p>
		<input type="text" name="type">
		<input type="submit">
	</form>

	<?php 
		$input = $_GET['type']; 

		$humanGif = "<img src='https://media.giphy.com/media/l0HlSNOxJB956qwfK/giphy.gif'>";
		$catGif = "<img src='https://media.giphy.com/media/CjmvTCZf2U3p09Cn0h/giphy.gif'>";
		$unicornGif = "<img src='https://media.giphy.com/media/l0LIYv9tJFIVHxF5u/giphy.gif'>";

		echo ($input == 'human') ? $humanGif : ($input == 'cat' ? $catGif : $unicornGif); 


	 ?>
</body>
</html>