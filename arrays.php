<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		echo "<p>Arrays</p>";
		$stringArray = ['Hello', 'world', '!'];
		$numberArray = [1, 3, 5, 4.55, 3.6, 99];
		$multiArray = [ 
			[1, 2, 3],
			[4, 5, 6],
			[7, 8, 9],
		];


		echo print_r($stringArray);
		echo "<br/>";
		echo print_r($numberArray);
		echo "<br/>";
		echo print_r($multiArray);
		echo "<br/>";
		echo print_r(count($multiArray));
		echo "<br/>";
		echo print_r(array_merge($stringArray, $numberArray));
		echo "<br/>";
		echo print_r(end($numberArray));
		echo "<br/>";
		array_push($stringArray, "good", "morning");
		print_r($stringArray);
	?>
</body>
</html>