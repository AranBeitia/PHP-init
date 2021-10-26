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
		$integer = 65;
		$float= 65.00;
		$boolean= false;
		$string = "hello kitty";
		$null = null;
		$array = ["hello", "world", "!"];
		$object = (object) [
			'name' => 'Kitty',
			'surname' => 'surname',
			'age' => 8
		];
		
		echo "<p>types</p>";
		echo "Integer: ". $integer."<br/>";
		echo "Float: ". $float."<br/>";
		echo "Boolean: ". $boolean."<br/>";
		echo "String: ". $string."<br/>";
		echo "Null: ". $null."<br/>";
		echo "Array: ". print_r($array)."<br/>";
		echo "Object: ". print_r($object)."<br/>";
	?>
</body>
</html>