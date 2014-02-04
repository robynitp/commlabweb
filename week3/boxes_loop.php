<!DOCTYPE HTML> 
<html> 
<head> 
	<title>The name of my page</title>
	<style type="text/css">
	.box{
		border: 1px solid #333;
		background-color: red;
		margin: 10px;
		float: left;
		width: 20px;
	}
	</style>

</head>

 <body>
	<p>Have I got some boxes for you!</p>
	<?php 
	
	// do this 20 times
	for ($i=0; $i<20; $i++){
		$height = 10 * ($i + 1); // increase the height every time
		echo "<div class=\"box\" style=\"height: {$height}px;\">";
		echo "Box! \n";
		echo '</div>';
		echo "\n";
		
	}	
	?> 
  </body> 
</html>