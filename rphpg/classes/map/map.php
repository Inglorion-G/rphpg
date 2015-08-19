<?php
	include("../../utility.php");
	
	class Map {
		public $x;
		public $y;

		function __construct($dimensions = null) {
			$this->x = 10;
			$this->y = 10;
		}

		public function render_grid()
		{
			$this->grid = $this->make_grid();

			$grid_string = "";

			foreach($this->grid as $row) {
				$grid_string .= (implode($row, " ") . "\n");
			}

			echo $grid_string;
		}

		public function make_grid() 
		{
			$x = $this->x;
			$y = $this->y;

			$rows = array();

			for($i = 0; $i < $y; $i++) {
				$row = array();

				for($j = 0; $j < $x; $j++) {
					
					if($i == 0 || $i == 9)
						$row[] = "-";
					else
						$row[] = " ";
				}

				$rows[] = $row;
			}
			return $rows;
		}
	}

	$map = new Map();
	$map->render_grid();

?>