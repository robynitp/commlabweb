<?php
/*
An example of accessing the Google Geocoding API and getting results in XML
Info here: https://developers.google.com/maps/documentation/geocoding/
*/

$base_url = 'http://maps.googleapis.com/maps/api/geocode/';
$format = 'xml'; // 'xml' or 'json'
$address = 'address='.urlencode('350 5th Avenue New York, NY'); // makes the text URL friendly, ie, 350+5th+Avenue+New+York%2C+NY 
$url = $base_url.$format.'?'.$address.'&sensor=false'; // Google requires 'sensor=false' parameter 
// url should look something like: http://maps.googleapis.com/maps/api/geocode/xml?address=350+5th+Avenue+New+York%2C+NY&sensor=false

// Get the document at this url
$response = file_get_contents($url); 
// echo $response; //debug

// Parse XML with SimpleXML in PHP http://www.php.net/manual/en/simplexml.examples-basic.php
$xml = new SimpleXMLElement($response);
//var_dump($xml); // take a look at this to see what data you get back
// For example, you could show the latitude and longitude coordinates
echo "Latitude: ".$xml->result->geometry->location->lat."<br/>\n";
echo "Longitude: ".$xml->result->geometry->location->lng;