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
		echo "<p>Functions</p>";
		function sum ($a, $b) {
			return $a + $b;
		}
		echo "Sum 3 + 4= " .sum(3, 4);

		function multiplication ($a, $b) {
			return $a * $b;
		}
		echo "<br />";
		echo "Multiplication 3 X 4 = ". multiplication(3, 4);
		
		function division($a, $b) {
			return $a / $b;
		}
		echo "<br />";
		echo "Division 3 / 4 = ". division(3, 4);
		
		function operation($a, $b, $operator) {
			return $a $operator $b;
		}
		echo "<br />";
		echo "Operation: ". operation(3, 4, division);
	?>
</body>
</html>