<?php
// vong lap for 1
for ($i = 1; $i <= 10; $i++) {
    echo "I've counted to: $i<br/>";
}
echo "All done!<br/>";
// while 1
$j = 1;
while ($j<=10) {
    echo "I've counted to: $j<br/>";
    $j++;
}
echo "All done!<br/>";
// dung break de ngung lap
$randomNumber = rand(1,1000);
echo $randomNumber . "<br/>";
for ( $i=1; $i <= 1000; $i++ ) {
    if ( $i == $randomNumber ) {
        echo "Horray! I guessed the random number. It was: $i <br/>";
        break;
    }
}
// lap trong lap
for ( $tens = 0; $tens < 10; $tens++ ) {
    for ( $units = 0; $units < 10; $units++ ) {
        if ( $units == 5 ) break 1;
        echo $tens . $units . "<br/>";
    }
}
?>
