<?php
// to debug, uncomment var_dump
// var_dump($_POST);

//show the title from the form, wrapped in h1 tags
echo "<h1>";
echo $_POST['mytitle'];
echo "<h1>";

//show the content from the form, wrapped in p tags
echo "<p>";
echo $_POST['mycontent'];
echo "</p>";


?>