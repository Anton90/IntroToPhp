<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
	<link rel="stylesheet" href="../bootstrap.css">
</head>
<body class="ml-3">
	 <p>
	 	<h2>Hi there!</h2>
	 	<h3>Here is the information you gave us.</h3>
	 	<ul class="nav nav-tabs">
		  <li class="nav-item">
		    <a class="nav-link <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){echo 'active';} ?>" href="#">Post</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link <?php if ($_SERVER['REQUEST_METHOD'] == 'GET'){echo 'active';} ?>" href="#">Get</a>
		  </li>
		</ul>
		<div class="<?php if ($_SERVER['REQUEST_METHOD'] == 'GET'){echo 'd-none';} ?>">
	 	<h4>5 Favorite movies</h4>
	 		<ol>
	 			<li><?php echo $_POST["favMovie1"]; ?></li>
	 			<li><?php echo $_POST["favMovie2"]; ?></li>
	 			<li><?php echo $_POST["favMovie3"]; ?></li>
	 			<li><?php echo $_POST["favMovie4"]; ?></li>
	 			<li><?php echo $_POST["favMovie5"]; ?></li>
	 		</ol>
		
	 	<h4>5 Favorite tv shows</h4>
	 		<ol>
	 			<li><?php echo $_POST["favTvShow1"]; ?></li>
	 			<li><?php echo $_POST["favTvShow2"]; ?></li>
	 			<li><?php echo $_POST["favTvShow3"]; ?></li>
	 			<li><?php echo $_POST["favTvShow4"]; ?></li>
	 			<li><?php echo $_POST["favTvShow5"]; ?></li>
	 		</ol>
	 	</div>
		<div class="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){echo 'd-none';} ?>">
	 	<h4>5 Worst movies</h4>
	 		 <ol>
	 			<li><?php echo $_GET["badMovie1"]; ?></li>
	 			<li><?php echo $_GET["badMovie2"]; ?></li>
	 			<li><?php echo $_GET["badMovie3"]; ?></li>
	 			<li><?php echo $_GET["badMovie4"]; ?></li>
	 			<li><?php echo $_GET["badMovie5"]; ?></li>
	 		</ol>

	 	<h4>5 Favorite countries</h4>
	 		 <ol>
	 			<li><?php echo $_GET["favCountry1"]; ?></li>
	 			<li><?php echo $_GET["favCountry2"]; ?></li>
	 			<li><?php echo $_GET["favCountry3"]; ?></li>
	 			<li><?php echo $_GET["favCountry4"]; ?></li>
	 			<li><?php echo $_GET["favCountry5"]; ?></li>
	 		</ol>
	 	</div>
	 </p>

	 <table>
	 	<tr>
	 		<th>Favorite Movie</th>
	 	</tr>
		<?php 
		for (


		}

		 ?>
	 </table>

</body>
</html>