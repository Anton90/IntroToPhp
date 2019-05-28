<?php 
session_start();
include ("blackjack.php"); 

$player = new Blackjack;
$dealer = new Blackjack; 

$_SESSION['player'] = $player;
$_SESSION['dealer'] = $dealer; 
unset($_SESSION['score']);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Game</title>
 	<link rel="stylesheet" href="../bootstrap.css">
 </head>
 <body>

 	<div class="container m-3 d-flex justify-content-center">
 		<div>
 			<form method="POST">
 				<input type="submit" name="hit" value="Hit">
 				<input type="submit" name="stand" value="Stand">
 				<input type="submit" name="surrender" value="Surrender...">
 				<input type="submit" name="reset" value="Reset">
 			</form>
 			<div class="m-2 d-flex justify-content-center">
 				<?php 
 				
 					if ($_POST["hit"]) {

 						// At the beginning of the game, the player gets 2 cards.
 						if ($player->score == 0) {
 							$player->Hit(); 
 						}
 						$player->Hit();
 						
 						if ($player->score == 21) {
							echo "<b>Blackjack!</b><br>You Win!!!"; 
							unset($_SESSION['score']);
						} else if ($player->score > 21) {
							unset($_SESSION['score']);
							echo " -<b>You Lost!</b>-";
						} else {
							echo "Your score is now: " . $player->score;
						}
 					}

 					if ($_POST["stand"]) {
 						$player->Stand();
 					};

 					if ($_POST["surrender"]) {
 						echo $player->Surrender();
 						unset($_SESSION['score']);
 					}

 					if ($_POST["reset"]) {
 						echo "Score is now: 0"; 
 						unset($_SESSION['score']);
 					}

 				 ?>
 			</div>
 		</div>
 	</div>
 	
 </body>
 </html>