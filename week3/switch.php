<?php
// for more information about switch, see http://us2.php.net/manual/en/control-structures.switch.php
$color = "blue";
switch ($color){
	case "red":
		echo 'You are warm.';
		break;
	case "blue":
		echo 'You are cold.';
		break;
	case "green":
		echo 'You are calm.';
		break;
	default:
		echo "Not sure what you are";
}