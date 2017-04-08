<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

array_push($authors, "Louisa May Alcott");// Will add "Louisa May Alcott" to the array

$authors[] = "L.M. Montgomery";// preferred method to add an element to an array

//array_push only adds index values


print_r($authors);
?>