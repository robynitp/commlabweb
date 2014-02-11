<?php

$contents = file_get_contents('http://google.com'); 
echo $contents;

// NOTE: the php config setting allow_url_fopen has to be on for this to work
