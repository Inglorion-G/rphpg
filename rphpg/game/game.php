<?php
	include("../classes/map/map.php");
	include("../utility.php");
	$run_game = true;

	while($run_game == true) {
		$input = readline("> ");
		$result = handle_input($input);

		if($result == false) {
			break;
		} else {
			puts("You entered {$input}, type 'end' or 'quit' to break this loop");
		}
	}

	function handle_input($input) {
		if($input == "quit" || $input == "end") {
			return false;
		} else {
			return $input;
		}
	}
?>