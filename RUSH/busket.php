<?php 
	session_start();
	function show_bas($op){
	$res = 0;
	$ids = unserialize(file_get_contents("./database/basket"));
	$pro = unserialize(file_get_contents("./database/catalog"));
	foreach ($ids as $i => $val) {
		foreach ($pro as $key => $value) {
			if ($value['id'] == $val) {
				if ($op)
					echo "<tr><td class=\"nam\" ><p>".$value['name']."</p></td>";
				$res += $value['price'];
				if ($op) {
				echo "<td class=\"pri\"><p>".$value['price']."$</p></td>";
				echo "<td class=\"but\"><form action=\"del_bas.php\" method=\"post\"><button type=\"submit\" name=\"del\" value=\"".$val."\">DEL</button></form></td></tr>";
				$key = 0;
			}
			}
		}
	}
	if (!$op)
		echo $res;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Basket</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/bas_sty.css">
</head>
<body>
	<div id="cen">
	<header>
		<h1>Basket</h1>
		<a style="text-align:center;" href="home_page.php"><button>Go home, nigger!</button></a>
	</header>
	<section>
		<hr>
		<table width="width: 100%">
			<?php show_bas(1);?>	
		</table>
		<hr>
		<h2><?php show_bas(0)?>$</h2>
	</section>
	<form action="finish.php" method="post">
		<input type="text" name="f_name" placeholder="Name:">
		<input type="text" name="s_name" placeholder="Second Name:">
		<input type="number" name="num" placeholder="Telephone Number:">
		<button type="submit" name="total" value="123">Purchase</button>		
	</form>
	</div>
</body>
</html>