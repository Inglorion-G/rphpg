<?php

$includes = ["/game.php", "/map.php"];

foreach($includes as $file) {
	include( __DIR__ . "/classes" . $file);
}

?>