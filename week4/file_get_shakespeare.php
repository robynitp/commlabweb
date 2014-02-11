<h1>Sonnet 116</h1>
<?php
$contents = file_get_contents('shakespeare.txt'); 
echo "<p>";
echo nl2br($contents); //look up the PHP function nl2br() on php.net
echo "</p>";