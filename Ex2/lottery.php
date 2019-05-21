<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lottery</title>
	<link rel="stylesheet" href="../bootstrap.css">
	<link rel="stylesheet" href="lottery.css">
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
?>
<h3>Choose one of these options for a chance to win awesome prizes!!!</h3>
<div class="container">
	<form class="form-check-inline" action="index.php" method="POST">
	  <label class="form-check-label">
		<?php
		for ($i=0; $i < count($output); $i++) 
		{
			$random = "lottery" . $i; 
			echo " <input type='radio' class='form-check-input' name='lotteryOption' value='$i'>";
			echo $output[$i];
		}
		?>
	 	<input type="submit" class="submit">
	  </label>
	</form>
</div>

<?php 

 ?>
</body>
</html>