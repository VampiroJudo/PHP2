<?php

$currency = 'penny';

$sampleString = 'A $currency saved is a $currency earned'; // Will print out "$currency, not penny"

echo $sampleString;


$misc = 'St. Patrick's Day; //single quotes terminating string. Putting a backlash after the k (Patrick\'s) will give us the correct print out
echo $misc;

//Printing strings in single quotes will print out string "as is." There will be no investigation of string.

?>