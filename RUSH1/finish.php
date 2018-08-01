<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Game Over!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
		<?php
		echo "<div><h1>You are the fallen one, little padavan!(".$_SESSION['opponents'][$_SESSION['c_pl'] - 1][4].")<br>Don't waste your time!<h1>";
		echo "<form action=\"index.php\" method=\"post\" novalidate><button>Let's play again!</button></form></div>";
		session_destroy();
		?>
	</div>
</body>
</html>