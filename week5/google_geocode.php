<?php
/*
An example of accessing an API and getting results in JSON or XML

The Google Geocoding API takes an address and gives location data, including lat/long coordinates
Info here: https://developers.google.com/maps/documentation/geocoding/

The results can come back as XML or JSON -- your choice
*/

$base_url = 'https://maps.googleapis.com/maps/api/geocode/json';
$address = 'address='.urlencode('350 5th Avenue New York, NY'); // makes the text URL friendly, ie, 350+5th+Avenue+New+York%2C+NY 
$key = 'YOUR API KEY';
$url = $base_url.'?'.$address.'&sensor=false&key='.$key; // Google requires 'sensor=false' parameter
// echo $url; //debug -- make sure you got the URL right 
// url should look something like: http://maps.googleapis.com/maps/api/geocode/json?address=350+5th+Avenue+New+York%2C+NY&sensor=false

// Get the document at this url
$response = file_get_contents($url); 
// echo $response; //debug

// For JSON response:
$json = json_decode($response,true);
var_dump($json); // take a look at this to see what data you get back
// For example, you could show the latitude/longitude coordinates 
echo $json['results'][0]['geometry']['location']['lat'];
echo ",";
echo $json['results'][0]['geometry']['location']['lat'];
