<?php
/*
PHP's built-in array, $_GET, contains any name/values pairs that are in the query string of the URL
for example: mysite.com/script.php?name=Jane&page=2&city=New+York&x=3&y=6
The key/value pairs in the URL above are:

name: 	Jane
page: 	2
city: 	New York
x: 3
y: 6

*/
// echo = print to screen
echo "Hello ";
echo $_GET['name']; //the value of "name" in the query string, ie, Jane 

$city = $_GET['city'];
echo "<p>How is life in $city?</p>";

$sum = $_GET['x'] + $_GET['y'];
echo "The sume of x and y is $sum";

