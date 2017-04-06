<?php

$currency = "penny";

$sampleString = "A $currency saved is a $currency earned"; 

echo $sampleString;

$var = 2;

echo "$varnd place"; //PHP is looking for a variable and doesnt find it, it only prints "place"

echo "($var)nd place"; //will print out "2nd place"

echo $var."nd place"; //Example of concantanation in PHP. PHP uses periods NOT plues signs for concantanation.

?>