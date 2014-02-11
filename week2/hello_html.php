<html>
 <head>
	<title>The name of my page</title>
 </head>
<body>
<h1>Hello World</h1>
<?php
// we're in PHP now
echo "<h2>How are you?</h2>\n";
$x = 4 + 5;
$y = $x + 1;
if ($x < 4){
	echo "<p>low number</p>";
} else {
	echo "high number";
}
?>
	<div class="story">
		<h3><a href="/html-intro">An Intro to HMTL</a></h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non rutrum lacus. In tincidunt mollis leo sed molestie. Etiam vitae enim molestie, vulputate ipsum vel, imperdiet sapien.</p>
	</div> <!-- end story div -->
	
<?php
	if ($y == 10){
		echo 10;
	}
?>
</body>
</html>