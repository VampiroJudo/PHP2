<?php

$authors = array(
	"quarky" => "Charles Dickens",
	"brilliant" => "Jane Austin",
	"poetic" => "William Shakespeare"
	);

// foreach ($authors as $val) {
// 	echo $val."\n"; will print values on thier own line
// }
	
foreach ($authors as $key => $val) {
	echo $val." (".$key.")\n"); // will print values and thier keys on thier own lines
}

?>