<?php

function puts($string)
{
	echo($string . "\n");
}

function clear_screen() {
	print chr(27) . "[2J" . chr(27) . "[;H";
}

?>