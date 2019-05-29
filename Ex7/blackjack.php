<?php 
session_start(); 

class Blackjack {
	public $score; 

	public function __construct() {
		if (!$_SESSION['score']) {
			$this->score = 0;
		} else {
			$this->score = $_SESSION['score']; 
		}
	}


	public function Hit() {
	 	$rand = rand(1,11);
		$this->score += $rand;
		$_SESSION['score'] = $this->score; 	
	}


	public function Stand() {
		echo "Your score is: " . $this->score;
		$score1 = $this->score; 
		unset($_SESSION['score']);

		while ($_SESSION['score'] <= 15) {
			$this->Hit(); 
		}
		$score2 = $this->score; 
		echo "<br>The dealer has: " . $this->score;
		echo "<br>"; 

		if ($score2 > $score1 && $score2 <= 21) {
			echo "Dealer Wins!";
		} else  if ($score1 == $score2) {
			echo "Dealer Wins!";
		} else {
			echo "Player Wins!"; 
		} 
	}


	public function Surrender() {
		unset($_SESSION['score']); 
		echo "Dealer wins!<br>Loser!";

		while ($_SESSION['score'] <= 15) {
			$this->Hit(); 
		}
		echo "<br>The dealer has: " . $this->score;
	}
}

?>