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
			printf(strtolower("HELLO ". $name));
		};
		$greet("Daisy");
		echo "<br/>";

		$bye = function($name) { 
			printf("BYE ". $name);
		};
		$bye("Daisy");

		$string = 'repeat string <br/>';
		print_r(str_repeat($string, 5));

		$lengthString = '<p>hello beautiful world </p>';
		print_r(strlen($lengthString));

		echo ('<br/>');
		echo strpos('Hello kitty, Who is kitty?, meaning kitty', 'kitty');

		echo ('<br/>');
		echo strtoupper('Hello kitty, Who is kitty?, meaning kitty');

		echo ('<br/>');
		echo strtolower('HELLO KITTY, WHO IS KITTY?');

		echo ('<br/>');
		echo substr('HELLO KITTY', -5);

	?>
</body>
</html>