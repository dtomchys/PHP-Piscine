<?php
	Class Tyrion{
		public function sleepWith($obj){
			if (get_class($obj) == "Jaime") {
				echo "Not even if I'm drunk !\n";
			}
			elseif (get_class($obj) == "Cersei") {
				echo "Not even if I'm drunk !\n";
			}
			else
				echo "Let's do this.\n";
		}
	}
?>