<?php
/* 
-----
Tiny Facebook!
-----
This script lists all the people in the system.
*/
?>
<!DOCTYPE HTML> 
<html> 
	<head>
		<title>Welcome to Tiny Facebook!</title>
	</head>
	<body>
	<h1>All the People</h1>
<?php
/*
Set up the data in an array. 
The id numbers are the keys (aka indexes) of the array.
The names are the values.
Don't let the line breaks in the array confuse you -- it's just split up so it's easier to read.
*/
$people = array(
	4563 => 'Tom',
	3421 => 'Jane',
	2345 => 'Judy',
	9582 => 'Matilda',
	8732 => 'Alfred'
	);

/*
Make a list of all the people and link to their individual profiles.
We want PHP to produce HTML that looks something like this:

<ul>
	<li><a href='profile.php?id=4563'>Tom</a></li>
	<li><a href='profile.php?id=342'>Jane</a></li>
	<li><a href='profile.php?id=2345'>Judy</a></li>
</ul>

Notice the format of the links: profile.php?id=4563
The query string (?id=4563) carries data that we'll use in profile.php

*/

// start the list with an HTML <ul> tag
echo "<ul>\n"; // fyi: \n creates a line break so the HTML is easier to read

/*
Create list item (<li>) and link (<a>) for each person
Loop through the $people array using the foreach loop

== foreach() syntax translation: ==
Take all the people and treat each one individually as a person

== foreach() syntax format: ==
foreach ($array as $key => $value){
	// the variables $key and $value are available here
}

*/
foreach ($people as $id => $person){ // two new variables are created here: $id and $person
	
	// The first time through the loop, $id will be 4563 and $person will be 'Tom'
	//  ... and so on, until you reach the end of the array
	
	echo "<li><a href='profile.php?id=$id'>$person</a></li>\n";
	
}

// end the list
echo "</ul>";

// and now back to our regularly scheduled HTML
?>
</body> 
</html>
