<?php 
session_start();
include("functions.php");
require("security.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="../bootstrap.css">
</head>
<body>
	<div class="container  
		<?php 
			if (!$_POST['No']) {
				echo "d-none"; 
			} else {
				echo "";
			}
		?>
		">
		<div class="row m-5">
			<div class="col-3 border d-flex justify-content-center p-3 ">
				<form method="POST">
				<button type="submit" name ="generate">Generate Object</button>
				</form>
			</div>

			<div class="col-3 border d-flex justify-content-center p-3">
				<form method="POST">
				<button type="submit" name="revert">Revert Object</button>
				</form>
			</div>

			<div class="col-4 border d-flex justify-content-center p-3">
				<form method="POST">
				<input type="text" name="nickname">
				<button type="submit" name="submit" >Get new nickname</button>
				</form>
				
			</div>
		</div>

		<div>
		<?php 

		if (isset($_POST["submit"])) {
			$str = $_POST['nickname'];
			nickname_generate($str); 
		}

		if (isset($_POST["generate"])) {
			object_generate();
			$_SESSION['objGenerate'] = $object; 
			 
		}

		if (isset($_POST["revert"])) {
			if ($_SESSION['objGenerate']) { 
				$revertObj = $_SESSION['objGenerate'];
				object_revertParam($revertObj);
			} else {
				object_revertNoParam(); 
			}
			
		}

		 ?>
		 </div>

	</div>
</body>
</html>

<!-- 			 <?php 
			if (!$_POST['No']) {
				echo "d-none"; 
			} else {
				echo "";
			}
			?>" -->