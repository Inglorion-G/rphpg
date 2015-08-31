<?php

function puts($string)
{
	clear_screen();
	echo($string . "\n");
}

function clear_screen() 
{
	print chr(27) . "[2J" . chr(27) . "[;H";
}

?>