<?php

//EXAMPLE OF A FUNCTION
//function createName($parameter,$secondParamter) {
//		...code that performs action;	
//}

function bookAuthor() {
	echo 'William Shakespeare';
}

function listOfBooks() {
	echo 'Hamlet\n';
	echo 'Romeo and Juliet';
}

listOfBooks();

//doesn't matter if call comes before or after the function

function bookByAuthor($authorName,$year) {
	echo $year;
	echo "\n";
	echo $authorName;
}

$year = 1910;
$authorName = "William Shakespeare";

bookByAuthor($authorName,$year);

?>