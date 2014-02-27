<?php
$client_id = 'YOURID';
$client_secret = 'YOURSECRET';

$request_date = date('Ymd'); //returns current date in format YYYYMMDD

$base_url = 'https://api.foursquare.com/v2/';
$endpoint = 'venues/search?';
// There are lots of possible ways to search. See: https://developer.foursquare.com/docs/venues/search
$params = 'near=New+York+University'; 
$auth = "&client_id=$client_id&client_secret=$client_secret&v=$request_date";

$url = $base_url.$endpoint.$end_point.$params.$auth;
//echo $url; // for debugging

// Get the document at this url
$results = file_get_contents($url);
//echo $results; // for debugging -- this is the json text

// turn the json text into a PHP array
$json_results = json_decode($results,true);

// var_dump($json_results); // the full array
// var_dump($json_results['response']['venues']); // drill down to the venues array

// put the venues in a variable for easy access later
$venues = $json_results['response']['venues'];

/*
loop through the array of venues
*/

foreach ( $venues as $venue){
	echo '<li>';
	$a_tag = false; // track whether there's a link
	if ($venue['url']){ // if there's a url given, make a link tag
		echo '<a href="'.$venue['url'].'">';
		$a_tag = true; // so we'll know to close the a tag at the end
	}
	echo $venue['name']; // the 'name' property of the venue object
	if ($a_tag){echo '</a>';}
	echo '</li>';
}
