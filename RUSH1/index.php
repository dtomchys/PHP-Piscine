<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Start</title>
	<link rel="stylesheet" type="text/css" href="./css/log.css">
</head>
<body>
	<div id="out">
		<div id="registration">
			<h2>Fill in Nicknames:</h2>
			<form action="Check_error.php" method="get">
				<input type="text" name="player1" placeholder="Player 1">
				<input type="text" name="player2" placeholder="Player 2">
				<button type="submit" name="start">Start!</button>
			</form>
			<div>
				<?php
					if ($_SESSION['err'] == "player_err")
						echo "<p style=\"color: red;\">Fill in all the fields!</p>";
					session_destroy();
				?>
			</div>
		</div>
	</div>	
</body>
</html>