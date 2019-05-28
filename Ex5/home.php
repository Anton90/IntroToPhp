<?php 
session_start();
include("functions.php");
require("security.php");
 
 ?>

<!DOCTYPE html>
<html lang="en">home
<head>home
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="../bootstrap.css">
</head>
<body>
 <?php 
 	if($_POST["Yes"]) {
 		echo "<h2>" . nickname_generate("awesomeNickname") . "</h2>"; 
 	} else if ($_POST["No"] || isset($_POST["generate"]) || isset($_POST["revert"]) || isset($_POST["nickname"]))  {
 		showHome();  		 
 	} else {
 		securityPage(); 
 	}

function showHome() {home

	print <<< home1
	<div class="container ">home
		<div class="row m-5">
			<div class="col-3 border d-flex justify-content-center p-3 ">
				<form method="POST">
				<button type="submit" name ="generate" value="gen">Generate Object</button>
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
				</form>home
				
			</div>
		</div>
		
		<div>
home1;
			
				if (isset($_POST["nickname"])) {
					$str1 = $_POST['nickname'];
					echo nickname_generate($str1); 
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
		 	
print <<< home2
		 </div>
	</div>


</body>
</html>
home2;
};
?>