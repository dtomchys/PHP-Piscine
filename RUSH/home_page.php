<?php
	session_start();
	function show($ct)
	{
		$arr = unserialize(file_get_contents("./database/catalog"));
		if (!empty($ct)) {	
			foreach ($arr as $key => $value) {
				if ( $ct == $value['cat']) {
					echo "<div class=\"show\">";
					echo "<img width=\"150\" height=\"150\" class=\"cart\" src='".$value['img']."'>";
					echo "<p>".$value['name']."</p>";
					echo "<p>".$value['detail']."</p>";
					echo "<p>".$value['price']."$</p>";
					echo "<form action=\"add_to_basket.php\" method=\"post\"><button type=\"submit\" name=\"id\" value=\"".$value['id']."\">Order</button></form>";				
					echo "</div>";
				}

			}
		}
		else{
			foreach ($arr as $key => $value) {
				echo "<div class=\"show\">";				
				echo "<img width=\"150\" height=\"150\" class=\"cart\" src='".$value['img']."'>";
				echo "<p>".$value['name']."</p>";
				echo "<p>".$value['detail']."</p>";
				echo "<p>".$value['price']."$</p>";
				echo "<form action=\"add_to_basket.php\" method=\"post\"><button type=\"submit\" name=\"id\" value=\"".$value['id']."\">Order</button></form>";
				echo "</div>";
			}
		}	
	}
?>
<!doctype html>
<html>
<head>
	<img src="">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>IPhones.</title>
	<link rel="stylesheet" href="./css/styles.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">
</head>
<body>
	<div id="wrapper">
		<header>
			<p><?php if ($_SESSION['logged_on_user']) { echo "Welcome, ".$_SESSION['logged_on_user']."!"; 
			echo "<br><form action=\"./log_out.php\" method=\"post\"><button name=\"logout\" value=\"Log Out\" id=\"neloh\">Log Out</button></form>";}
			else
				{ echo "<form id=\"log\" action=\"log_in.php\" method=\"post\">
				<input type=\"text\" name=\"username\" placeholder=\"Login:\">
				<input type=\"password\" name=\"password\" placeholder=\"Password:\">
				<button id=\"loh\" type=\"submit\" name=\"login\">Sign In</button></form>";}
			?></p>
			<img class="logo" src="./imgs/logo.jpeg" alt="Logo">
			<img class="name" src="./imgs/name.png" alt="name">
		</header>
		<?php if ($_SESSION['logged_on_user'] == "admin"):?>
			<a href="admin.php"><button>ADM</button></a>
		<?php endif ;?>		
		<nav class="center">
		<ul class="top-menu">
			<li class="active"><a href="home_page.php" style="color: white;">HOME</a></li>
			<li><a href="home_page.php">ABOUT US</a></li>
			<li><a href="home_page.php">PARTNERS</a></li>
			<li><a href="home_page.php">CONTACT</a></li>
		</ul>
		</nav>
		<aside><nav>
		<ul class="aside-menu">
				<li><a href="home_page.php?ct=sp">Smart-Phone</a></li>
				<li><a href="home_page.php?ct=lp">Lap-top</a></li>
				<li><a href="home_page.php?ct=mc">Mac</a></li>
				<li><a href="home_page.php?ct=iw">IWatch</a></li>
				<li><a href="home_page.php?ct=ep">Ear-Pods</a></li>
				</ul>
			</nav>
		<div>
			<a href="busket.php"><img style="margin: 40px 40px 0 0;" width="70px" height="70px" src="./imgs/basket.png"></a>
		</div>					
		</aside>
		<section>
			<blockquote>
				<p>
				“Quality is more important than Quantity”
				</p>
				<cite>Steve Jobs</cite>
			</blockquote>
			<div class="alll">
				<?php show($_GET['ct'])?>
			</div>	
		</section>
	</div>
	<footer></footer>
</body>
</html>