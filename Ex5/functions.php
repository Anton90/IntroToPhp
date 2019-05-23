<?php  
session_start();

function randomString($length = 4) {
		$str = "";
		$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		$max = count($characters) - 1;

		for ($i = 0; $i < $length; $i++) 
		{
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str;
	}

	function randomUppercase($string) {
		$newString = '';
		for ($i = 0; $i < strlen($string); $i++) {
			if (ctype_lower($string[$i])) {
				if (rand(1,2) == 1) {
					$newString .= strtoupper($string[$i]); 
				} else {
					$newString .= $string[$i]; 
				} 
			} else {
				$newString .= strtolower($string[$i]); 
			}
		}	
		return $newString;
	}


	function addGradient($string) {
		$colorRandom = rand(0,360);  
		$newString = '';
		for ($i = 0; $i < strlen($string); $i++) {
			$color = $colorRandom + $i*20; 
			$newString .=  "<span style='color: hsl($color, 100%, 50%);'>" . $string[$i] . "</span>"; 
		}
		return $newString;
	}


	$revName = strrev($nickname);
	$upperName = strtoupper($revName);
	$lowerName = strtolower($upperName); 
	$normalName = strrev($lowerName);
	$dashName = "--" . $normalName . "--";
	$xName = "x" . $dashName;
	$shuffleName = str_shuffle($xName);
	$randomName = randomstring() . $shuffleName;
	$bracketsName = "[" . randomstring(). "]" . $shuffleName;
	$randomUpName = randomUppercase($bracketsName);
	$gradientName = addGradient($randomUpName); 
	
		$names = [
		$revName,
		$upperName,
		$lowerName,
		$normalName,
		$dashName,
		$xName,
		$shuffleName,
		$randomName,
		$bracketsName,
		$randomUpName,
		$gradientName
	];

	function nickname_generate($nickname) { 
		$revName = strrev($nickname);
		$upperName = strtoupper($revName);
		$lowerName = strtolower($upperName); 
		$normalName = strrev($lowerName);
		$dashName = "--" . $normalName . "--";
		$xName = "x" . $dashName;
		$shuffleName = str_shuffle($xName);
		$randomName = randomstring() . $shuffleName;
		$bracketsName = "[" . randomstring(). "]" . $shuffleName;
		$randomUpName = randomUppercase($bracketsName);
		$gradientName = addGradient($randomUpName); 
		
		echo $gradientName; 
	}

	function object_generate() {
		global $object; 
		$object = json_decode($_SESSION["sessionCar"]);
		echo "<pre>"; 
		print_r($object) ; 
		echo "</pre>";
		 
	}

	function object_revertParam($obj) {
		
		$objArray = (array)$obj;

		$carsArray = array_merge($objArray['arr1'], $objArray['arr2']);
		unset($objArray['arr1']);
		unset($objArray['arr2']); 

		$carsAsArray = array_splice($objArray, 3, 5); 

		$objNoArray = (object)$objArray;

		echo "<pre>";
		print_r($carsArray);
		print_r($carsAsArray);
		print_r($objNoArray);
		echo "</pre>";  
	}

	function object_revertNoParam() {
		$revert = json_decode($_SESSION["sessionCar"]);
 		object_revertParam($revert); 		
	}
 ?>
