<?php
	include './log_in.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorization</title>
	<link rel="stylesheet" type="text/css" href="./css/style_log.css">
</head>
<body>
<div class="brand">
	<h1>IStore</h1>
</div>
</div>
<div class="header">
	<h2>Login</h2>
</div>

<form action="index.php" method="post">
	<?php include 'errors.php'; ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<button type="submit" name="login" class="btn">Login</button>
	</div>
	<p>
		Not yet a member? <a href="registration.php">Sign up</a>
	</p>
</form>
</body>
</html>