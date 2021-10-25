<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Iterator for</p>
  <?php 
    for ($i = 0; $i <=5; $i++){
      echo "<p>number {$i}</p>";
    }
  ?>
  <p>Iterator foreach</p>
  <?php 
    $a = ['foo'=> 12, 'bar'=> 2];

    foreach ($a as $k){
      echo $k;
    }
  ?>
  <p>Iterator while</p>
  <?php
  $i = 0;
  while ($i <= 5) {
    $i++;
    echo "<p>number {$i}</p>";
  }
  ?>
  <p>Iterator do while</p>
  <?php
  $i = 0;
  do {
    $i++;
    echo $i;
  }while ($i<=5)
  ?>
</body>

</html>