<?php

	$authors = ["Charles Dickens", "Jane Austin", "Mark Twain", "William Shakespeare", "Louisa May Alcott"];
	// $authors = [];
	$count  = count($authors);

	switch($count) {
		
		case 0:
			echo "There are no authors.".PHP_EOL;
			break;
		case 1:
			echo "There is 1 author".PHP_EOL;
			break;
		default: 
			echo "There is a total of ".$count. "author(s)".PHP_EOL;
			break;
	}

	switch (5 <=> 7) {
		case 1:
			echo "Greater Than";
			break;
		case 0:
			echo "Equal";
			break;
		case -1:
			echo "Less than";
			break;
	}
?>