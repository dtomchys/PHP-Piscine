<?php

	public Class Color(){
		public static $verbose = FALSE;
		public $red = 0;
		public $green = 0;
		public $blue = 0;

		public function __construct($arr[]){
			if (isset($arr['rgb']) && is_numeric($arr['rgb']))
			{
				$this->red = ($arr['rgb'] >> 16) & 0xFF;
				$this->green = ($arr['rgb'] >> 8) & 0xFF;
				$this->blue = $arr['rgb'] & 0xFF;
				$this->show("constructed");
				return ;
			}
			elseif (isset($arr['red']) && isset($arr['green']) && isset($arr['blue']))
			{
				$this->red = $arr['red'];
				$this->green = $arr['green'];
				$this->blue = $arr['blue'];

				$self::show("constructed");
				return ;
			}
		}
		public __toString(){
			echo "Color( red: ".$this->red.", green: ".$this->green.", blue: ".$this->blue." )\n";
		}
		private function show($s){
			if ($verbose == TRUE)
				echo $s.".\n";
		}
		public function __destruct(){
			$self::show("destructed");
		}
		// public static function doc(){

		// } 
	}

print( Color::doc() );
Color::$verbose = True;

$red     = new Color( array( 'red' => 0xff, 'green' => 0   , 'blue' => 0    ) );
$green   = new Color( array( 'rgb' => 255 << 8 ) );
$blue    = new Color( array( 'red' => 0   , 'green' => 0   , 'blue' => 0xff ) );

$yellow  = $red->add( $green );
$cyan    = $green->add( $blue );
$magenta = $blue->add( $red );

$white   = $red->add( $green )->add( $blue );

print( $red     . PHP_EOL );
print( $green   . PHP_EOL );
print( $blue    . PHP_EOL );
print( $yellow  . PHP_EOL );
print( $cyan    . PHP_EOL );
print( $magenta . PHP_EOL );
print( $white   . PHP_EOL );

Color::$verbose = False;

$black = $white->sub( $red )->sub( $green )->sub( $blue );
print( 'Black: ' . $black . PHP_EOL );

Color::$verbose = True;

$darkgrey = new Color( array( 'rgb' => (10 << 16) + (10 << 8) + 10 ) );
print( 'darkgrey: ' . $darkgrey . PHP_EOL );
$lightgrey = $darkgrey->mult( 22.5 );
print( 'lightgrey: ' . $lightgrey . PHP_EOL );

$random = new Color( array( 'red' => 12.3, 'green' => 31.2, 'blue' => 23.1 ) );
print( 'random: ' . $random . PHP_EOL );
?>
