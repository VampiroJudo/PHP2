<?php

	$var1 = (6 < 7);
	$var2 = (8 == 8);

	var_dump($var1);
	var_dump($var2);

	var_dump($var1 && $var2); // will print out three boolean values of true

	var_dump($var1 || $var2);

	var_dump(!$var1); // will print out the boolean value of false



?>