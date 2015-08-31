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
		return readline(">>> ");
	}

	function handle_input($input) 
	{
		if($input == "quit" || $input == "end") {
			return false;
		} else if ($input == "north" || $input == "south" || $input == "west" || $input == "east") {
			$this->player->move($input);
			return true;
		} else {
			return $input;
		}
	}

}

?>