<?php
	class Player{
		public $pp;
		public $hp;
		public $shield;
		public $pos;
		public $name;
		public $arr = array();

		static function doc(){
			echo file_get_contents('./doc/Player.doc.txt');
		}
		function __construct($x, $name){
			$this->pp = 10;
			$this->hp = 10;
			$this->shield = 1;
			$this->pos = ($a = rand(0, 14999)) == $x ? rand(0, 14999) : $a;
			$this->name = $name;
		}
		public function get_pos(){
			$this->arr[] = $this->pp;
			$this->arr[] = $this->hp;
			$this->arr[] = $this->shield;
			$this->arr[] = $this->pos;
			$this->arr[] = $this->name;
			return $this->arr;
		}
		public function g_p(){
			return $this->pos;
		}
	}
?>