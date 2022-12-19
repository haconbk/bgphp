<?php
$x = 1;
settype($x, "int");
$y = 1;
settype($y, "int");
$z = 1;
settype($z, "float");
if ($x === $y) {
    echo "true <br/>";
} else {
    echo "false <br/>";
}
if ($x === $z) {
    echo "xz true <br/>";
} else {
    echo "xz false <br/>";
}
if ($x == $z) {
    echo "xz true <br/>";
} else {
    echo "xz false <br/>";
}
$a = 5;
echo ++$a . "<br/>";
$a = 5;
echo $a++ . "<br/>";
?>
