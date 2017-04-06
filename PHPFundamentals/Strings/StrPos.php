<?php



$quote = "Courage is resistance to fear, mastery over fear, not the absense of fear";

echo strpos($quote, "fear");// will give you the position of the first character "f"

echo strpos($quote, "fear", 26);//will look for the next occurence of fear

echo strpos($quote, "C") //this is case sensitive

//the return result for a character that is not in the string is an empty string
?>