<?php
	session_start();
	require 'Field.class.php';
	require 'Player.class.php';
	require 'player_stats.php';
	require 'ft_kost.php';
	// session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Game</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		$_SESSION['c_pl'] = !isset($_SESSION['c_pl']) ? 1 : $_SESSION['c_pl'];
		$field = new Field(15000);
		if (!isset($_SESSION['opponents'])){
			$p1 = new Player( 15001,$_SESSION['pls']['p1']);
			$p2 = new Player( $p1->g_p(),$_SESSION['pls']['p2']);
			$_SESSION['opponents'][0] = $p1->get_pos();
			$_SESSION['opponents'][1] = $p2->get_pos();
		}
		if (!$_SESSION['kost'])
			$_SESSION['kost'] = 0;
		if (!$_SESSION['winner'])
			$_SESSION['winner'] = 0;
	?>
	<h1>WARHAMER</h1>
	<div class="field">
		<?php
			if (!$_SESSION['field'])
				$_SESSION['field'] = Field::getField($_SESSION['opponents']);
			Field::showField($_SESSION['field']);
		?>
	</div>
	<div class="Table">
		<?php ft_player_stats()?>
		<?php ft_kost()?>
	</div>
	<div class="btns">
		<div class="up"><a href="./up.php"><img src="https://lh6.googleusercontent.com/-I8v2s31EoPk/UL5E_sxd3AI/AAAAAAAAAcQ/b0r4FhZQOUQ/s308/back%2520to%2520top.jpg"></a></div>
		<div class="mid"><a href="./left.php"><img src="https://briscomhealth.org.uk/cldt/wp-content/uploads/sites/3/2015/11/Arrow.png" ></a>
		<a href="./down.php"><img src="http://dou-stend.ru/images/%D1%81%D1%82%D1%80%D0%B5%D0%BB%D0%BA%D0%B0%20%D0%B2%D0%BD%D0%B8%D0%B7.png" ></a>
		<a class="right" href="./right.php"><img src="http://s1.iconbird.com/ico/0912/ToolbarIcons/w256h2561346685452ArrowLeft.png" ></a></div>
		<div id="bottom">
			<a href="./shoot.php"><img src="https://cdn2.iconfinder.com/data/icons/inverticons-stroke-vol-4/32/target_weapon_shoot-512.png" ></a>
			<form action="next.php" method="post" novalidate><button class="button" id="next" type="submit" name="" value="">Next</button></form>
			<div class="line"><h1>Now turn to move the player# <?php echo $_SESSION['c_pl']?></h1></div>
		</div>
	</div>
</body>
</html>