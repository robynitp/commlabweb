<?php
/* The class definition for a class Animal */

class Animal{
	
	/* properties -- the variables of a class */
	
	public $species = "cat"; // cat is the default
	public $color;
	public $age;
	public $name;
	
}

/* Now make some objects of the type Animal */

// make a cat!
$cat = new Animal(); 
$cat->name = "Fluffy";
echo "I am ".  $cat->name . " and I am a " . $cat->species . ".<br/>\n"; 

// look at the cat object with var_dump:
echo "<pre>"; // the <pre> tag just makes var_dump output display in a more readable way
var_dump($cat);
echo "</pre>";

// make a dog!
$dog = new Animal(); 
$dog->color = "brown";
$dog->name = "George";
echo "I am ".  $dog->name . " and I am a " . $dog->species . ".<br/>\n"; //species has not been set yet

// set the species property
$dog->species = "dog";
echo "No, I am a ". $dog->species . "!!!<br/>\n"; 

// check out the dog object
echo "<pre>";
var_dump($dog);
echo "</pre>";