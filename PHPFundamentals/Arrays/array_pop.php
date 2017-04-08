<?php

$authors = array(
	"Charles Dickens",
	"Jane Austin",
	"William Shakespeare"
	);

$lastValue = array_pop($authors);// will remove the last item from the array

echo $lastValue;//will print out last element in the array
print_r($authors);
?>