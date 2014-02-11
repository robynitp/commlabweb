<!DOCTYPE HTML>
<html>
<head>
	<title>YouTube API</title>
	<style type="text/css">
		li{
			list-style-type:none;
			margin-bottom: 30px;
		}
	</style>
</head>

<body>
<?php
/*
Connecting to the YouTube API

This code uses a PHP library to make the API connections to Google services
Download the library here: https://code.google.com/p/google-api-php-client/
Make sure the paths in the require statements below point to the location of the library

*/
require('google-api-php-client/src/Google_Client.php');
require('google-api-php-client/src/contrib/Google_YoutubeService.php');

/* Set $developer_key to the "API key" value from the "Access" tab of the
Google APIs Console <http://code.google.com/apis/console#access>
Go to your app, then open "Server Key" and copy the "API Key" value
Please ensure that you have enabled the YouTube Data API for your project. */
$developer_key = 'YOUR_API_KEY_HERE';


// create a new Google Client object
$client = new Google_Client();
$client->setDeveloperKey($developer_key);

$youtube = new Google_YouTubeService($client);

$search_term = 'kittens';

// You could make the search term dynamic by sending it in the query string with GET
// ex: yoursite.com/thispage.php?search=puppies
// You could also make a form to allow someone to fill out a search field
if (isset($_GET['search'])){
	$search_term = $_GET['search'];
}

// see more about the available search parameters here: https://developers.google.com/youtube/v3/docs/search/list
$searchResponse = $youtube->search->listSearch('id,snippet', array(
 'q' => $search_term,
  'maxResults' => 10,
  'type'=>'video'
));

//var_dump($searchResponse); // for debugging

echo "<h1>Search: <em>$search_term</em></h1>";

foreach ($searchResponse['items'] as $searchResult) {
	$title = $searchResult['snippet']['title'];
	$thumbnail_src = $searchResult['snippet']['thumbnails']['default']['url'];
	$video_id = $searchResult['id']['videoId'];
	//YouTube video URL format: http://www.youtube.com/watch?v=mmf0KAHWlnk
	$video_url = 'http://www.youtube.com/watch?v='.$video_id;
	echo '<li><a href="'.$video_url.'">';
	echo '<img src="'.$thumbnail_src.'" />';
	echo '</a><br/>';
	echo $title;
	echo '</li>';
}

?>
</body>
</html>
