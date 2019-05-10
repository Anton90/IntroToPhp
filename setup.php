<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Setup</title>
	<link rel="stylesheet" href=".../bootstrap.css">
</head>
<body>
	<form action="result.php" method="post">
		<h2>5 Favorite movies</h2>
		<ul>
			<li> <input type="text" name="favMovie1">1</li>
			<li> <input type="text" name="favMovie2">2</li>
			<li> <input type="text" name="favMovie3">3</li>
			<li> <input type="text" name="favMovie4">4</li>
			<li> <input type="text" name="favMovie5">5</li>
		</ul>
		<h2>5 Favorite tv shows</h2>
		<ul>
			<li> <input type="text" name="favTvShow1">1</li>
			<li> <input type="text" name="favTvShow2">2</li>
			<li> <input type="text" name="favTvShow3">3</li>
			<li> <input type="text" name="favTvShow4">4</li>
			<li> <input type="text" name="favTvShow5">5</li>
		</ul>
		<input type="submit">
	</form>

		<form action="result.php" method="get">
		<h2>5 Worst movies</h2>
		<ul>
			<li> <input type="text" name="badMovie1">1</li>
			<li> <input type="text" name="badMovie2">2</li>
			<li> <input type="text" name="badMovie3">3</li>
			<li> <input type="text" name="badMovie4">4</li>
			<li> <input type="text" name="badMovie5">5</li>
		</ul>
		<h2>5 Favorite countries</h2>
		<ul>
			<li> <input type="text" name="favCountry1">1</li>
			<li> <input type="text" name="favCountry2">2</li>
			<li> <input type="text" name="favCountry3">3</li>
			<li> <input type="text" name="favCountry4">4</li>
			<li> <input type="text" name="favCountry5">5</li>
		</ul>
		<input type="submit">
	</form>
</body>
</html>