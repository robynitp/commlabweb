<?php
$people = array("Alex", //don't let the syntax throw you -- you can put these all on one line or on separate lines, either is fine
				"Bing",
				"Hellyn",
				"Jason",
				"Jerllin",
				"Justin",
				"Michael",
				"Michelle",
				"Phurbu",
				"Sharon",
				"Kristina");

// to debug, uncomment var_dump
//var_dump($people);

// This is a foreach loop. It is a loop especially for arrays
echo "<ul>";

foreach ($people as $key=>$person){ 
	echo "<li>$key: $person</li>\n"; 
	
	//echo "<li>$person</li>\n";  	
}

echo "</ul>";









