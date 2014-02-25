<?php
/*
Simple word count API by Jer Thorpe
Described in this post: http://blog.blprnt.com/blog/blprnt/art-and-the-api
*/

echo '<pre>'; //html pre tag to format output of var_dump so it's easier to read, without having to View Source in browser
$url = "http://api.blprnt.com/wordcount/API";
$json_text = file_get_contents($url);
echo $json_text;

echo "\n\n"; //just some line breaks

$json_object = json_decode($json_text);
var_dump($json_object);