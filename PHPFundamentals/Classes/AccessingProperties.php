<?php

	class Person {

		public $firstName = "Samuel Langhorne";
		public $lastName = "Clemens";
		public $yearBorn = 1899;
	}

	$myObject = new Person();

	echo $myObject->firstName; //will access and print out property of class

	$myObject->firstName = "S.L."; //overwrites existing instance with a new instance

	echo $myObject->firstName; //prints out new instance property(variable)

?>