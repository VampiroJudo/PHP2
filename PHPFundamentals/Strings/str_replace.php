<?php

$quote = "To be or not to be? That is the question";

$replaced = str_replace("be", "know", $quote);

echo $replaced; //will print out the word "know" in place of the word "be";

$replacedTwo = str_replace("be", "know", $quote, $count);

echo $replacedTwo; //with give you the value *the amount of times "be" has been replaced with "know"




?>