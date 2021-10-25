<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dates</title>
</head>
<body>
  <?php
  $date = new DateTime('2000-01-01');
    echo $date->format('Y-m-d');
    echo "<p>Today is " . date("Y.m.d"). "</p>";
    echo "<p>Today is " . date("m"). "</p>";
    echo "<p>Actual minute is " . date("i:s"). "</p>";
  ?>
</body>
</html>