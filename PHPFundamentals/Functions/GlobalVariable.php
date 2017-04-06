<?php


$authorName = "Williams Shakespeare";

function setAuthorName() {

	global $authorName; //<----- only works if you're inside of the function
	echo "Charles Dickens";
}

setAuthorName();

echo $authorName;





?>