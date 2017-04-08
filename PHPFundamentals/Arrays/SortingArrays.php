<?php

	$authors = array(
		"Charles Dickens",
		"Jane Austin",
		"William Shakespeare"
	);




	$authorsAssociative = array(
		  "quarky" => "Charles Dickens",
		  "brilliant" => "Jane Austin",
		  "poetic" => "William Shakespeare"
	);

	sort($authors);// will sort all values in alphabetical order

	print_r($authors);

	//with associative arrays you will get an indexed array

	asort($authors);// will preserve keys. Makes it better for associative arrays and not so much for indexed arrays










?>