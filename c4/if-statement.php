<?php
$widgets = 25;
if ($widgets == 23) {
    echo "We have exactly 23 widgets in stock!" . "<br/>";
}
if ($widgets >= 10 && $widgets <= 20) {
    echo "We have between 10 and 20 widgets in stock." . "<br/>";
}
if ($widgets >= 10) {
    echo "We have plenty of widgets in stock.";
} elseif ($widgets >= 5) {
    echo "Less than 10 left. Time to order some more!";
} else {
    echo "Panic stations: Less than 5 widgets left! Order more now!";
}
?>
