<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditional</title>
</head>
<body>
  <?php 
    $today = date('D');
    print ($today == 'Mon') ? " <p>We are on monday</p>": "<p>other</p>";
    $currentMonth = date('m');
    $otherMonth = date('M');
    echo ($currentMonth == '10')?"<p>we are in October</p>":"<p>($otherMonth)</p>";

    $currentMinute = date("i");
    if($currentMinute < 10) {
      echo "<p>The current minute is less than 10</p>";
    } elseif ($currentMinute > 15){
      echo "<p>The current minute is greater than 15</p>";
    }else {
      echo "<p>Does not meet any condition</p>";
    }
    echo "<p>".$currentMinute."</p>";

    $dayOfWeek = date('D');
    echo "<p>Today is ".$dayOfWeek."</p>";

    switch($dayOfWeek){
      case 'Mon':
        print 'Monday';
        break;
      case 'Tue':
        print 'Tuesday';
        break;
      case 'Wet':
        print 'Wetnesday';
        break;
      case 'Thu':
        print 'Thursday';
        break;
      case 'Fri':
        print 'Friday';
        break;
      case 'Sat':
        print 'Saturday';
        break;
      case 'Sun':
        print 'Sunday';
        break;
    }
  ?>

</body>
</html>