<?php

	class Person {

		const 	AVG_LIFE_SPAN = 79;

		public $firstName;
		public $lastName = "Clemens";
		public $yearBorn = 1899;

		function __construct() {

			echo "I'm in the constructor";
			$this->firstName = "Samuel Langhorne"
		}

		public function getFirstName() {

			return $this->firstName;

		}

		public function setFirstName($tempName) {

			$this->firstName = $tempName;

		}
	}

	$myObject = new Person(); // will print out the constructor string

	echo $myObject->getFirstName();

?>