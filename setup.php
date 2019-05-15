<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Setup</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body class="ml-3 container">
	
	<form action="result.php" method="post">
	<div class="row">
		<div class="col-6">
		<h2>5 Favorite movies</h2>
		<ol>
			<li> <input type="text" name="favMovie1"></li>
			<li> <input type="text" name="favMovie2"></li>
			<li> <input type="text" name="favMovie3"></li>
			<li> <input type="text" name="favMovie4"></li>
			<li> <input type="text" name="favMovie5"></li>
		</ol><br>
		</div>

		<div class="col-6">
		<h2>5 Favorite tv shows</h2>
		<ol>
			<li> <input type="text" name="favTvShow1"></li>
			<li> <input type="text" name="favTvShow2"></li>
			<li> <input type="text" name="favTvShow3"></li>
			<li> <input type="text" name="favTvShow4"></li>
			<li> <input type="text" name="favTvShow5"></li>
		</ol>
		</div>
		<input type="submit">
		
	</div>
	</form><br>
	

	
	<form action="result.php" method="get">
	<div class="row">
		<div class="col-6">
		<h2>5 Worst movies</h2>
		<ol>
			<li> <input type="text" name="badMovie1"></li>
			<li> <input type="text" name="badMovie2"></li>
			<li> <input type="text" name="badMovie3"></li>
			<li> <input type="text" name="badMovie4"></li>
			<li> <input type="text" name="badMovie5"></li>
		</ol><br>
		</div>
		
		<div class="col-6">
		<h2>5 Favorite countries</h2>
		<ol>
			<li> <input type="text" name="favCountry1"></li>
			<li> <input type="text" name="favCountry2"></li>
			<li> <input type="text" name="favCountry3"></li>
			<li> <input type="text" name="favCountry4"></li>
			<li> <input type="text" name="favCountry5"></li>
		</ol>
		</div>
		<input type="submit">
		
	</div>
	</form>
	
</body>
</html>