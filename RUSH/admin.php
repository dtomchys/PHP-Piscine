<?php 
	session_start();
	if ($_SESSION['logged_on_user'] != "admin")
		header("Location: http://127.0.0.1:8100/RUSH/index.php");
	function show_order(){
		$dst = unserialize(file_get_contents("./database/order"));
		foreach ($dst as $k => $value) {
				echo "<tr>";
			foreach ($value as $key => $val) {
				if ($key == 2) {
					echo "<td colspan=\"4\"></td>";
				}
				echo "<td style=\"border-bottom: 1px solid black; border-right: 1px solid black; padding: 3px; border-top: 1px solid black;\">".$val."</td>";
		}
			echo "</tr>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="./css/adm_style.css">
</head>
<body>
	<header>
		<h1 style="text-align:center;">Welcome to admin page!</h1>
		<a style="text-align:center;" href="home_page.php"><button>Go home, nigger!</button></a>
	</header>
<div id="prodact">
<?php $tmp = unserialize(file_get_contents("./database/catalog")); ?> 
<?php foreach ($tmp as $value): ?>
<?php echo "<div class=\"pic\"><img width=\"150\" height=\"150\" class=\"cart\" src='".$value['img']."'>"?>	
	<p><?php echo $value['name']; ?></p>
<p><?php echo $value['detail']; ?></p>
<p><?php echo $value['price']; ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="field_a">
	<h2>Add products:</h2>
<form action="add_products.php" method="post">
	<input type="text" name="img" placeholder="Path_img:">
	<input type="text" name="name_p" placeholder="Product_name:">
	<input type="text" name="detail" placeholder="Detai:">
	<input type="text" name="price" placeholder="Price:">
	<input type="text" name="id" placeholder="ID:">
	<input type="text" name="cat" placeholder="Cathegories:">
	<button type="submit" name="add" value="">Add</button>
</form>
</div>
<div>
	<h2>Delete product:</h2>
	<form action="del_product.php" method="post">
		<input type="text" name="id" placeholder="ID:">
		<button type="submit" name="del" value="DEL">Delete</button>
	</form>
</div>
<div>
	<h2>Delete user:</h2>
	<?php $tmp = unserialize(file_get_contents("./database/user")); ?> 
	<?php foreach ($tmp as $value): ?> 
	<div class="name">
	 <p><?php echo $value['username']; ?></p>
	</div>
	<?php endforeach; ?>
	<form action="del_user.php" method="post">
	<input type="text" name="login" placeholder="Login:">
	<button type="submit" name="del" value="del">Delete</button>
	</form>
</div>
<table style="border: 1px solid black;" cellspacing="0">
	<h2>Orders:</h2>
	<tr>
		<td style="border-bottom: 1px solid black; border-right: 1px solid black; padding: 3px;">First Name:</td>
		<td style="border-bottom: 1px solid black; border-right: 1px solid black; padding: 3px;">Second Name:</td>
		<td style="border-bottom: 1px solid black; border-right: 1px solid black; padding: 3px;">Phone Number:</td>
		<td style="border-bottom: 1px solid black; border-right: 1px solid black; padding: 3px;">Other:</td>
	</tr>
	<?php show_order()?>
</table>
</body>
</html>

