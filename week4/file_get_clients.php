<?php
//$contents = file_get_contents('clients.csv'); 
//echo $contents;

$lines_array = file('clients.csv');

//print_r($lines_array);

foreach ($lines_array as $line){
	//echo $line . "<br/>";
	$client_array = explode(",",$line);
	//print_r($client_array);
	$last = $client_array[0];
	$first = $client_array[1];
	echo "$first $last <br/>";
}
