<?php
/*
GENERIC PHP OBJECT

If you just need an object and don't care what class it is, PHP has a generic class you can use.
This is good when you want to store a group of variables (called "properties" in an object) together but don't need any special functionality.
Just create a new instance of StdClass (stands for Standard Class)
Then you can add and get properties from it.

*/
$object = new StdClass();

//add properties
$object->month = "February";
$object->room = "341";
$object->school = "NYU";
$object->clothes = array('shirt','pants','shoes','socks','underwear');

// output properties
echo "<p>The school is ". $object->school . "</p>";

//look at the object
var_dump($object);
