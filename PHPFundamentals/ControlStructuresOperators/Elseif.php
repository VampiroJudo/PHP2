<?php

	$authors = ["Charles Dickens", "Jane Austin", "Mark Twain", "William Shakespeare", "Louisa May Alcott"];
	// $authors = [];
	$count  = count($authors);

	if ($count == 1) {
		echo "There is 1 author";
	} elseif ($count > 1) {
		echo "There is a total of ".$count." author(s)";
	} else {
		echo "There are no authors.";
	}



?>