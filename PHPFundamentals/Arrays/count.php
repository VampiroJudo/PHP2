<?php

$authors = array(
		"Charles Dickens",
		"Jane Austin",
		"William Shakespeare",
		"Mark Twain",
		"Louisa May Alcott"
	),
	"Female" => array(
		"L.M. Montgomery" => array("Anne of Green Gables", "Anne of Avonlea"),
		"Louisa May Alcott" => array("Little Women")
		)
	);

//echo count($authors); --> will output the amount of elements in the array 
echo count($authors, COUNT_RECURSIVE); // Will print out the total number of elements in the array of arrays


?>