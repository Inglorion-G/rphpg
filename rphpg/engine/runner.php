<?php

include_once(__DIR__ . "/../import.php");

class Runner
{
	function __construct($game)
	{
		$this->game = $game;
		$this->running = false;
	}

	public function run_game()
	{
		$this->running = true;
		while($this->running) {
			$user_input = $this->game->get_input();
			$result = $this->game->handle_input($user_input);

			if($result == false) {
				break;
			} else {
				puts($result);
				$this->game->map->render_grid();
			}
		}

		puts("G A M E  O V E R!");
	}
}

?>