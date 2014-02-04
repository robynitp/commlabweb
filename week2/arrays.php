<?php
// Arrays and loops

$people = array("Alex", //don't let the syntax throw you -- you can put these all on one line or on separate lines, either is fine
				"Bing",
				"Hellyn",
				"Hochien",
				"Jason",
				"Jerllin",
				"Justin",
				"Michael",
				"Michelle",
				"Phurbu",
				"Sharon",
				"Kristina");

// to debug, uncomment var_dump
var_dump($people);

// This is a foreach loop. It is a loop especially for arrays
echo "<ul>";
foreach ($people as $key => $person){ // for every person in the array of people
	echo "<li>$key: $person</li>\n";  // output the person's name and the index (key) of their spot in the array	
}
echo "</ul>";

/*-----
Associative arrays: *you* decide what the keys are called
----*/
$employee = array(
	'employee_id' => 349238432,
	'last_name'   => 'Jacobs',
	'first_name'  => 'Jane',
	'birth_year'  => 1981,
	'position'	  => 'Developer');
	
// show the full name
// (the dots concatenate text, eg, paste pieces of text together.)
echo "<p>" . $employee['first_name'] . " " . $employee['last_name'] . "</p>"; 

//show position
echo "<p>Position: " . $employee['position'] . "</p>";

//change the value of 'position'
$employee['position'] = "Senior Developer";

//sho new position
echo "<p>New Position: " . $employee['position'] . "</p>";


echo "<p><strong>Employee Record</strong></p>";
echo "<ul>";
foreach ($employee as $label => $data){ // assign the key of each element to the variable $label. call every value $data -- you can name them whatever you like
	echo "<li>$label: $data</li>\n"; 	
}
echo "</ul>";




