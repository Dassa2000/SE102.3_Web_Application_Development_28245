<html>
<head>
  <title>Day of the Week</title>
</head>
<body>
  <?php
    function getDayOfWeek($dayNumber) {
      switch ($dayNumber) {
        case 1:
          return "Monday";
        case 2:
          return "Tuesday";
        case 3:
          return "Wednesday";
        case 4:
          return "Thursday";
        case 5:
          return "Friday";
        case 6:
          return "Saturday";
        case 7:
          return "Sunday";
        default:
          return "Invalid number";
      }
    }

    $dayNumber = 3;

    $dayOfWeek = getDayOfWeek($dayNumber);

    echo "Day " . $dayNumber . " is " . $dayOfWeek;
  ?>
</body>
</html>