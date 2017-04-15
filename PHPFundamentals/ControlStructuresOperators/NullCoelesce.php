<?php

	$authors = ["Charles Dickens", "Jane Austin", "Mark Twain", "William Shakespeare", "Louisa May Alcott"];
	$count  = count($authors);

	$outcome = $count ?? "Count unavailable";
	echo $outcome;

?>