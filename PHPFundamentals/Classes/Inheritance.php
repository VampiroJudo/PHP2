<?php

	class Person {

		const 	AVG_LIFE_SPAN = 79;

		public $firstName;
		public $lastName;
		public $yearBorn;

		function __construct($tempFirst = "", $tempLast = "", $tempYear = "") {

			echo "Person Constructor".PHP_EOL; //EOL stands for End Of Line
			$this->firstName = $tempFirst;
			$this->lastName  = $tempLast;
			$this->yearBorn  = $tempYear;
		}

		public function getFirstName() {

			return $this->firstName.PHP_EOL;

		}

		public function setFirstName($tempName) {

			$this->firstName = $tempName;

		}

		public function getFullName() {

			echo "Person->getFullName()".PHP_EOL;
			return $this->firstName." ".$this->lastName.PHP_EOL;
		}
	}

	class Author extends Person {

		public $penName = "Mark Twain";

		public function getPenName() {

			return $this->penName.PHP_EOL;
		}

		public function getFullName() {

			echo "Author->getFullName()".PHP_EOL;
			return $this->firstName." ".$this->lastName.PHP_EOL;
		}
	}

	$newAuthor = new Author("Samuel Langhornre", "Clemens", 1899);
	echo $newAuthor->getFullName();// will print out full name
?>