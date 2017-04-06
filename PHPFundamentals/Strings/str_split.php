<?php

$quote = "It is a meloncholy truth that even great men hve their poor relations";

$varArray = str_split($quote);// will convert string to an array

print_r($varArray); //makes the variable print out in humna readable form

$varArray2 = str_split($quote, 8); //with print out string in an array of chunked character that are 8 character long

print_r($varArray2);

?>