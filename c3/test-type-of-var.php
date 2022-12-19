<?php
//$test_var;
//echo gettype($test_var) . "<br/>";
$test_var = 15;
echo gettype($test_var) . "<br/>";
$test_var = 8.5;
echo gettype($test_var) . "<br/>";
$test_var = "Hello World!";
echo gettype($test_var) . "<br/>";
$test_int = 10;
echo is_int($test_int) . "<br/>";
$test_var_1 = 8.23;
echo $test_var_1 . "<br/>";
settype($test_var_1,"string");
echo $test_var_1 . "<br/>";
settype($test_var_1,"integer");
echo $test_var_1 . "<br/>";
settype($test_var_1,"float");
echo $test_var_1 . "<br/>";
settype($test_var_1,"boolean");
echo $test_var_1 . "<br/>";
?>
