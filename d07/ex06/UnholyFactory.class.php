<?php
	class UnholyFactory{
		private $is = False;
		private $row = array();
		function absorb($obj){
			if ($obj instanceof Fighter) {
				foreach ($this->row as $key) {
					if ($key->type == $obj->type) {
						$this->is = True;
					}
				}
				if ($this->is == False){
					$this->row[] = $obj;
					echo "(Factory absorbed a fighter of type ".$obj->type.")\n";
				}
				else{
					echo "(Factory already absorbed a fighter of type ".$obj->type.")\n";
					$this->is = False;					
				}
			}
			else
				echo "(Factory can't absorb this, it's not a fighter)\n";
		}
		function fabricate($ar){
			foreach ($this->row as $key) {
				if ($key->type == $ar) {
					echo "(Factory fabricates a fighter of type ".$key->type.")\n";
					return $key;
				}
			}
			echo "(Factory hasn't absorbed any fighter of type ".$ar.")\n";
			return null;
		}
	}
?>