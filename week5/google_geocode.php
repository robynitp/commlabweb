<?php
/*
An example of accessing an API and getting results in JSON or XML

The Google Geocoding API takes an address and gives location data, including lat/long coordinates
Info here: https://developers.google.com/maps/documentation/geocoding/

The results can come back as XML or JSON -- your choice
*/

$base_url = 'http://maps.googleapis.com/maps/api/geocode/';
$format = 'json'; // 'xml' or 'json'
$address = 'address='.urlencode('350 5th Avenue New York, NY'); // makes the text URL friendly, ie, 350+5th+Avenue+New+York%2C+NY 
$url = $base_url.$format.'?'.$address.'&sensor=false'; // Google requires 'sensor=false' parameter
// echo $url; //debug -- make sure you got the URL right 
// url should look something like: http://maps.googleapis.com/maps/api/geocode/xml?address=350+5th+Avenue+New+York%2C+NY&sensor=false

// Get the document at this url
$response = file_get_contents($url); 
// echo $response; //debug

// For JSON response:
$json = json_decode($response);
var_dump($json); // take a look at this to see what data you get back
// For example, you could show the neighborhood name
echo $json->results[0]->address_components[2]->long_name;

// For XML response:
// Parse XML with SimpleXML in PHP http://www.php.net/manual/en/simplexml.examples-basic.php
//$xml = new SimpleXMLElement($response);
//var_dump($xml); // take a look at this to see what data you get back
// For example, you could show the latitude and longitude coordinates
//echo "Latitude: ".$xml->result->geometry->location->lat."<br/>\n";
//echo "Longitude: ".$xml->result->geometry->location->lng;