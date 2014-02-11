<?php
/*
Display a photo based on a color chosen.

In this example, the color is set by hand to "blue"

EXERCISE: 	Get the color from the user either through a form or the query string,
			so that the color is changes based on what the user picks.
			Use $_GET or $_POST.

*/

$color = "blue";

// the array matches the colors to the images
$photos = array('red'=>'sun.jpg','blue'=>'sky.jpg','green'=>'grass.jpg'); 

// to debug, use var_dump
// var_dump($photos);

// echo the image associated with the color
echo '<img src="images/' . $photos[$color] . '" />';
?>