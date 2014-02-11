<?php
/*
OpenWeatherMap API example
See documentation for more info: http://openweathermap.org/API
*/

/*
Get the 7-day forecast for London in imperial (Fahrenheit) units, with response in JSON format:
Parameters in query string:
q=London : search string
&mode=json : response format
&units=imperial : Fahrenheit
&cnt=7 : count, number of days to report

*/
$data = file_get_contents('http://api.openweathermap.org/data/2.5/forecast/daily?q=London&mode=json&units=imperial&cnt=7');

// turn the JSON data into a PHP object
$json = json_decode($data);

//var_dump($json); //for debugging
foreach ($json->list as $myday){
	echo '<li>';
	echo date('M d',$myday->dt); // format the timestamp as a human-readable date
	echo ': '.round($myday->temp->day) . 'F';
	echo '</li>';
}