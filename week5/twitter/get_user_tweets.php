<?php
// Content type header can fix character formatting issues BUT!!! this MUST be the first line if you use it !
header('Content-Type: text/html; charset=utf-8'); 

// pull in the Twitter API helper file
require_once('TwitterAPIExchange.php');

//twitter credentials
//require_once('twitter_keys.inc.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "YOUR ACCESS TOKEN",
    'oauth_access_token_secret' => "YOUR ACCESS TOKEN SECRET",
    'consumer_key' => "YOUR API KEY",
    'consumer_secret' => "YOUR API SECRET"
);

// The Twitter API endpoint URL. 
// See https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=DalaiLama'; // change to the twitter handle of your choice

$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

// make the API call to Twitter and get back JSON text 
$json_text = $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();

// debug: see the raw json text:
// echo $json_text;
// more debugging: decipher the JSON output by pasting it here: http://www.jsoneditoronline.org/

// turn the json text into a PHP array -- see http://us3.php.net/manual/en/function.json-decode.php
$json_array = json_decode($json_text,true);

// debug: show the PHP array that was created:
//var_dump($json_array);

// loop through the array and get every tweet
foreach ($json_array as $tweet){
	echo '<p>';
	echo $tweet['text'];
	echo '<br/> <em>'. $tweet['created_at'] . '</em>';	
	echo '</p>';
}
