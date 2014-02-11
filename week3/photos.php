<?php
// assume the color comes in from a form
// here we're just setting it by hand
$color = "blue";

// the array matches the colors to the images
$photos = array('red'=>'sun.jpg','blue'=>'sky.jpg','green'=>'grass.jpg'); 

// to debug, use var_dump
// var_dump($photos);

// echo the image associated with the color
echo '<img src="images/' . $photos[$color] . '" />';
?>