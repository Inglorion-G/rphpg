<?php

include_once(__DIR__ . "/import.php");

$player = new Player("George");
$map = new Map();
$map->track_object($player);
$game = new Game($player, $map);
$runner = new Runner($game);

$runner->run_game();

?>