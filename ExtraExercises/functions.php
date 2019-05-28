<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions</title>
</head>
<body>
	<?php  
		$text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole";

		$textArray = preg_split('/[ ,.]+/',$text);

		// echo "<pre>";
		// print_r($textArray); 
		// echo "</pre>"; 

		$shuffleArray = []; 

		foreach ($textArray as $word) {
			$shuffle = str_shuffle($word);
			array_push($shuffleArray, $shuffle);  
		}

		foreach ($shuffleArray as $item) {
			echo "$item ";
		}

		$array = [
			"caecotrophie",
			"chaenichthys",
			"microsphaera", 
			"sphaerotheca"
		];

		$replaced = str_replace("ae", "æ", $array);
		print_r($replaced);
		echo "<br>";

		$returnArray =  str_replace("æ", "ae", $replaced);
		print_r($returnArray);



	?>
</body>
</html>