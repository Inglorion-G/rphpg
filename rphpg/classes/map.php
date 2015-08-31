<?php

include_once(__DIR__ . "/../utility.php");

class Map {

	public $x;
	public $y;

	function __construct($dimensions = null) 
	{
		$this->x = 10;
		$this->y = 10;
		$this->init_grid();
		$this->tracked_objects = array();
	}

	public function render_grid()
	{
		$temp_array = array_merge($this->grid);

		foreach($this->tracked_objects as $obj) {
			$this->insert_to_grid($obj, $temp_array);
		}

		$grid_string = "";

		foreach($temp_array as $row) {
			$grid_string .= (implode($row, " ") . "\n");
		}

		echo $grid_string;
	}

	public function init_grid() 
	{
		$x = $this->x;
		$y = $this->y;
		$rows = array();

		for($i = 0; $i < $y; $i++) {
			$row = array();

			for($j = 0; $j < $x; $j++) {

				if($i == 0 || $i == $y - 1) {
					$row[] = "-";
				} elseif ($j == 0 || $j == $y - 1) {
					$row[] = "|";
				} else {
					$row[] = " ";
				}
			}
			$rows[] = $row;
		}
		$this->grid = $rows;
	}

	public function track_object($obj)
	{
		// insert object id as key, object position as value
		$this->tracked_objects[] = $obj;
	}

	private function insert_to_grid($obj, &$arr)
	{
		$y = $obj->pos[1];
		$x = $obj->pos[0];

		$arr[$y][$x] = $obj->symbol;
	}
}

?>