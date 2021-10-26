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
		$value= 155;
		$hello = 'Hello ';
		$hello .= 'kitty';

		echo '<p>strings</p>';
		echo '<p>this is a string</p>';
		echo "<p>String and a value of variable: $value </p>";
		echo "<p>String and a value concatenated: " .$value. "</p>";
		echo "<p>String and a value concatenated: " .$hello. "</p>";
		$greet = function($name) { 
			printf("Hello ". $name);
		};
		$greet("Daisy");

	?>
</body>
</html>