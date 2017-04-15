<?php

	$authors = ["Charles Dickens", "Jane Austin", "Mark Twain", "William Shakespeare", "Louisa May Alcott"];
	// $authors = [];
	$count  = count($authors);

	$outcome = ($count > 0) ? "Author Total: ".$count : "No Authors";
	echo $outcome;



?>