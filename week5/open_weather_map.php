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
$url = 'http://api.openweathermap.org/data/2.5/forecast/daily?q=London&mode=json&units=imperial&cnt=7';
$data = file_get_contents($url);
//debug: check to see the URL you're using.
//echo $url;

// turn the JSON data into a PHP array
$json_array = json_decode($data,true);

//var_dump($json_array);

$condition = $json_array['list'][0]['weather'][0]['main'];
echo "Condition on the first day is: $condition"; 

// Show the temperatures for all 7 days
foreach ($json_array['list'] as $myday){
	echo '<li>';
	echo date('M d',$myday['dt']); // format the timestamp as a human-readable date
	echo ': '.round($myday['temp']['day']) . 'F';
	echo '</li>';
}