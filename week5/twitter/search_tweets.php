<?php
// Content type header can fix character formatting issues BUT!!! this MUST be the first line if you use it !
header('Content-Type: text/html; charset=utf-8'); 
ini_set('display_errors', 1);

// pull in the Twitter API helper file
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "YOUR ACCESS TOKEN",
    'oauth_access_token_secret' => "YOUR ACCESS TOKEN SECRET",
    'consumer_key' => "YOUR API KEY",
    'consumer_secret' => "YOUR API SECRET"
);

// The Twitter API endpoint URL. 
// See https://dev.twitter.com/docs/api/1.1/get/search/tweets
$url = 'https://api.twitter.com/1.1/search/tweets.json'; 

// for search terms with spaces, apostrophes, etc, you must url encode. See: http://us3.php.net/manual/en/function.urlencode.php
$searchterm = urlencode('polar vortex');
//$getfield = '?q=cats'; 
$getfield = '?q='.$searchterm;
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

$json_text = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();



// turn the json text into a PHP array -- see http://us3.php.net/manual/en/function.json-decode.php
$json_array = json_decode($json_text,true);

// debug: show the PHP array that was created:
//var_dump($json_array);

$statuses = $json_array['statuses'];
// loop through the array and get every tweet
foreach ($statuses as $tweet){
    echo '<p>';
    echo '<strong>@'.$tweet['user']['screen_name'].'</strong><br/>';
    echo $tweet['text'];
    echo '<br/> <em>'. $tweet['created_at'] . '</em>';  
    echo '</p>';
}
