<?php
	Class Jaime extends Lannister{
		public function sleepWith($obj){
			if (get_class($obj) == "Tyrion") {
				echo "Not even if I'm drunk !\n";
			}
			elseif (get_class($obj) == "Cersei") {
				echo "With pleasure, but only in a tower in Winterfell, then.\n";
			}
			else
				echo "Let's do this.\n";
		}
	}
?>