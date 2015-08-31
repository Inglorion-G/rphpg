<?php

class Player {
	
	public $name;
	public $id;

	function __construct($name)
	{
		$this->id = uniqid();
		$this->name = $name;
		$this->pos  = array(1, 1);
		$this->symbol = "@";
	}

	public function move($dir)
	{
		switch($dir) {
			case "north":
				$this->pos[1] = $this->pos[1] - 1;
				break;

			case "south":
				$this->pos[1] = $this->pos[1] + 1;
				break;

			case "east":
				$this->pos[0] = $this->pos[1] + 1;
				break;

			case "west":
				$this->pos[0] = $this->pos[1] - 1;
				break;
		}
	}

}

?>