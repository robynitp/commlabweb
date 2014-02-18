<?php

$str = "equipment & transportation & people & ";
$new_str = substr($str, 0, -2);
echo $new_str;


$abc = trim('  Hello World ');
echo $abc . "<br/>";
echo strlen($abc); //5

$answer = "not good";
$from_form = strtolower("NOT goOD");

if ($answer == $from_form){
	echo "right!";
} else {
	echo "wrong!";
}