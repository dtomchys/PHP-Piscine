<?php
	class NightsWatch implements IFighter{
		private $_nightwaths = array( );
		public function fight(){
			foreach ($this->_nightwaths as $key) {
				$key->fight();
			}
		}
		public function recruit($nw){
			if ($nw instanceof IFighter) {
				$this->_nightwaths[] = $nw;
			}
		}
	}
?>