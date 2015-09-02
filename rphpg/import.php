<?php

$include = array("classes/game.php", "classes/map.php", "classes/player.php", "engine/runner.php", "constants.php");

foreach($include as $path) {
	include_once( __DIR__ . "/" . $path);
}

?>