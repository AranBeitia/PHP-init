<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operators</title>
</head>
<body>
  <p>operators</p>
  <?php
    $a = 1;
    $b = 3;
    $sum = $a + $b;
    $res = $a - $b;
    $multi = $a * $b;
    $div = $a / $b;
    $module = $a % $b;
    echo var_dump($sum);
    echo var_dump($sum == $multi);
    echo var_dump($module != $sum);
    echo var_dump($div);
    echo var_dump($div <= $res);
    echo var_dump($multi >=$div);
    echo var_dump($multi && $div);
    echo var_dump($multi || $div);
    echo var_dump(!$div);
  ?>
</body>
</html>