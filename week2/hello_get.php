<?php
// To see all the variables in the GET request, use var_dump:
var_dump($_GET);

/* 
Show a particular variable, in this case, 'city'
Assumes a URL that has "city" in the query string
example: mysite.com/commlab/page.php?city=Brooklyn
*/
echo $_GET['city'];