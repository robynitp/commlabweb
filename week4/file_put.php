<?php
/* 
Add a new line to a file that contains records of names and phone numbers
For example, the file might be called clients.txt and look like this:

Chan,Roger,345-9876
Garcia,Victoria,456-1234
Stevens,Julie,678-9872

*/

/* The name and phone number values might eventually come from a form, but here they're hard-coded */

$first = "Tim";
$last = "Thumb";
$phone = "495-2948";

$line = $last.','.$first.','.$phone."\n"; // "Thumb, Tim, 495-2948" + a line break
/* Important! 
  Use FILE_APPEND, to prevent overwriting
*/
file_put_contents('clients.csv',$line,FILE_APPEND);


