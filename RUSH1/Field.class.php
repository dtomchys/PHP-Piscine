<?php
	class Field{
		private $_length;
		function __construct($x){
			$this->_length = $x;
		}
		static function doc(){
			echo file_get_contents('./doc/Map.doc.txt');
		}
		function getLength(){
			return $this->_length;
		}
		static function getField($a){
			$arr = array();
			for ($i=0; $i < 15000; $i++) { 
				$arr[$i] = 0;
			}
			for ($i=0; $i < 14999; $i++) { 
				$j = rand(0,999);
				if ($j < 10)
					$arr[$i] = 3;
				elseif ($j > 9 && $j < 30)
					$arr[$i] = 4;
			}
			$arr[$a[0][3]] = 1;
			$arr[$a[1][3]] = 2;			
			return $arr;
		}
		static function showField($arr){
			for ($i=0; $i < 15000; $i++) { 
				if ($arr[$i] == 0) {
					echo "<div class=\"box\"></div>";
				}
				elseif ($arr[$i] == 1) {
					echo "<div id=\"p1\" class=\"pl\"></div>";
				}
				elseif ($arr[$i] == 2) {
					echo "<div id=\"p2\" class=\"pl\"></div>";
				}
				elseif ($arr[$i] == 3){
					echo "<div id=\"obs1\" class=\"obs\"></div>";
				}
				elseif ($arr[$i] == 4) {
					echo "<div id=\"obs2\" class=\"obs\"></div>";
				}
				elseif ($arr[$i] == 5) {
					echo "<div class=\"shoot\"></div>";
				}
				else
					echo "<div class=\"box\"></div>";
			}
		}
	}
?>