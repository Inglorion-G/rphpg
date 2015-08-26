<?php

include(__DIR__ . "/../utility.php");

class Game {

	public $running;

	function __construct($player) 
	{
		$this->running = true;
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
		} else {
			return $input;
		}
	}

}

?>