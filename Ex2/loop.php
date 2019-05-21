<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops</title>
	<link rel="stylesheet" href="../bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> 
</head>
<body>
<?php 
$show = [
	["Tv-show" => "Big Bang Theory", "Rating" => 3],
	["Tv-show" => "How I Met Your Mother", "Rating" => 4],
	["Tv-show" => "Seal Team 6", "Rating" => 4],
	["Tv-show" => "The Simpsons", "Rating" => 2],
	["Tv-show" => "Ncis", "Rating" => 5],
	["Tv-show" => "Hawai 5-0", "Rating" => 2],
	["Tv-show" => "Family guy", "Rating" => 1],
	["Tv-show" => "Game of thrones", "Rating" => 4],
	["Tv-show" => "S.W.A.T", "Rating" => 4],
	["Tv-show" => "The Flash", "Rating" => 3],
];
?>
	<table class="table-bordered m-2">
		<?php foreach($show as $arr): ?>
			<tr>
				<td class="p-1"><a href="https://www.google.com/search?q=<?php echo $arr["Tv-show"]; ?>">
					<?php echo $arr["Tv-show"]; ?></a></td>
				<td class="p-1">
					<?php 
					for ($i = 0; $i < $arr["Rating"]; $i++) 
					{
					echo ('<i class="fas fa-star"></i>');
					}
					?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>