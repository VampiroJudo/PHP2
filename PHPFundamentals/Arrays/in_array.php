<?php

$authors = array(
		"Charles Dickens",
		"Jane Austin",
		"William Shakespeare",
		"Mark Twain",
		"Louise May Aslcott",
		13
		);

	echo in_array("Jane Austin", $authors); // outputs "1" or true
	echo in_array("L.A. Montgomery", $authors); // outputs nothing or false
	echo in_array(13, $authors, true);// outputs "1" or true
	
?>


