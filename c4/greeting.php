<html>
<head>
    <title>Greetings</title>
    <link rel="stylesheet" type="text/css" href="common.css">
</head>
<body>
    <?php
    $hour = date("G");
    $year = date("Y");
    if ($hour >= 5 && $hour < 12) {
        echo "<h1>Good morning!</h1>";
    } elseif ($hour >= 12 && $hour < 18) {
        echo "<h1>Good afternoon!</h1>";
    } elseif ($hour >= 18 && $hour < 22) {
        echo "<h1>Good evening!</h1>";
    } else {
        echo "<h1>Good night!</h1>";
    }
    $leapYear = false;
    if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) $leapYear = true;
    echo "<p>Bạn có biết năm $year " . ($leapYear ? "":"không") . " là năm nhuận?</p>"
    ?>
</body>
</html>
