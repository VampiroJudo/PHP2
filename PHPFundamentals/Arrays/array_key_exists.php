<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

$authorsAssociative = array(
		  "quarky" => "Charles Dickens",
		  "brilliant" => "Jane Austin",
		  "poetic" => "William Shakespeare",
		  );

echo $authors[1]; // will print out "Jane Austin"
echo $authorsAssociative['quarky']; // will print out "Charles Dickens"
echo array_key_exists(, search)