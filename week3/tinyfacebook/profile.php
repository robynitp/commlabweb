<?php
/* 
-----
Tiny Facebook!
-----
This script shows a person's profile.

=====
Set up the people array just like the one in all_people.php
Think of this as your database.
( extra credit: find a way to not have to write this same array in 2 different files )
*/
$people = array(
	4563 => 'Tom',
	3421 => 'Jane',
	2345 => 'Judy',
	9582 => 'Matilda',
	8732 => 'Alfred'
	);

// Find out which person by getting the id from the query string
$id = $_GET['id'];

// using the id, get the name. Ex: $people[3421] is 'Jane'
$name = $people[$id]; 

// Use the person's name and make the content for the <title> tag
$title = $name." on Tiny Facebook";

?>
<!DOCTYPE HTML> 
<html> 
	<head>
		<title><?php echo $title ?></title>
	</head>
	<body>
<?php

$name = $people[$id]; 
echo "<h1>Profile: $name</h1>";
?>
<!-- back in HTML for a sec -->
<img src="avatar.jpg" />

<?php
echo "<p>$name</p>";
?>
</body> 
</html>