<?php

	class Person {

		const 	AVG_LIFE_SPAN = 79;

		protected $firstName;
		protected $lastName;
		protected $yearBorn;

		function __construct($tempFirst = "", $tempLast = "", $tempYear = "") {

			
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

		protected function getFullName() {

			echo "Person->getFullName()".PHP_EOL;
			return $this->firstName." ".$this->lastName.PHP_EOL;
		}
	}

	class Author extends Person {

		protected $penName = "Mark Twain";

		public function getPenName() {

			return $this->penName.PHP_EOL;
		}

		public function getCompleteName() {

			return $this->firstName." ".$this->lastName." a.k.a. ".$this->penName.PHP_EOL;
		}
	}

	$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);
	echo $newAuthor->getFullName; //with throw a fatal error
	echo $newAuthor->penName; // will also throw a fatal error

	echo $newAuthor->getCompleteName(); //will call our protected property
?>