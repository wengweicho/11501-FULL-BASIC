<?php
$var1 = 10;
$var2 = 50;
$tmp = 0;

echo "The value of var1 is: " . $var1 . "<br>";
echo "The value of var2 is: " . $var2 . "<br>";
echo "after replacing  var1 and var2: " . "<br>";
$tmp = $var2;
$var2 = $var1;
$var1 = $tmp;
echo "The value of var1 is: " . $var1 . "<br>";
echo "The value of var2 is: " . $var2 . "<br>";


?>