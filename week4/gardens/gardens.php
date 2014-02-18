<!DOCTYPE HTML>
<html>
 <head>
	<title>Community Gardens</title>
	<style>
		.boroB{ color: blue; }
		.boroM{ color: red; }
		.boroX{ color: green; }
		.boroQ{ color: orange; }
		.boroR{ color: purple; }
	</style>
 </head>
<body>
 <h1>NYC Community Gardens</h1>
<?php
/*
Display a list of all community gardens in NYC

Uses the list of NYC community gardens available here: https://nycopendata.socrata.com/Environment/NYC-Greenthumb-Community-Gardens/ajxm-kzmj?

*/
// get a file and turn it into an array -- each line is an element of the array
$lines_array = file('community_gardens.csv');

// debug -- var_dump to see what's in the array
// var_dump($lines_array);

// loop through the array of lines
foreach ($lines_array as $line){
	// debug -- see what each line looks like
	// echo " NEW LINE: " . $line . " --END OF LINE--<br/>\n";
	
	/*
	Split each line into an array of fields.
	In the community gardens csv file, the fields order of fields are:
	PropID,Boro,Community Board,Council District,Garden Name,Address,Size,Jurisdiction,NeighborhoodName,Cross Streets	
	*/
	$my_garden = explode(",",$line); // all the info about each particular garden goes here. var_dump to see it
	
	// get the garden name, it's the 5th field, so will have an index of 4
	$garden_name = $my_garden[4];
	// get the neighborhood
	$neighborhood = $my_garden[8];
	
	/* 
	Looking at the csv file in a spreadsheet, you'll see the boros are indicated by a letter: B,M,X,Q,R
	Create an array to map the letter to the borough name
	*/
	$boro_code = $my_garden[1];
	$boros = array(	"B"=>"Brooklyn",
					"M"=>"Manhattan",
					"X"=>"Bronx",
					"Q"=>"Queens",
					"R"=>"Staten Island");
	$boro_name = $boros[$boro_code]; // for example, $boros["Q"] would give you "Queens"
	
	// output the name, neighborhood, and borough as a list item <li>
	echo "<li><strong>$garden_name</strong> in <em>$neighborhood</em>, $boro_name</li>\n";
	
	// EXTRA FUN: wanna get fancy? use a CSS class to color code each item based on borough -- the CSS styles at the top of the page
	// echo "<li class=\"boro{$boro_code}\"><strong>$garden_name</strong> in <em>$neighborhood</em>, $boro_name</li>\n";
	
}
?>
</body>
</html>
