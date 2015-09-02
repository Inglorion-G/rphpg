<?php

include_once(__DIR__ . "/../utility.php");

class Game {

	public $running;

	function __construct($player, $map) 
	{
		$this->running = true;
		$this->map = $map;
		$this->player = $player;
	}

	function get_input() 
	{
		$ans = strtolower( trim( `bash -c "read -n 1 ANS ; echo \\\$ANS"` ) );
		return $ans;
	}

	function handle_input($input) 
	{
		if($input == "q") {
			return false;
		} else if ($input == "a" || $input == "b" || $input == "c" || $input == "d") {
			$this->player->move($input);
			return true;
		} else {
			return $input;
		}
	}
}

?>