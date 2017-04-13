<?php

	include "Person.php";
	include_once "Author.php";

	require "RandomClass.php";// will printout nothing. Stopping the script at the point that the class is not recognized.

	$newAuthor = new Author("Samuel Langhorne","Clemens", 1899);
	echo $newAuthor->getCompleteName();






?>