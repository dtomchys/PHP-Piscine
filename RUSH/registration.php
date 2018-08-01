<?php

include 'auxiliary.php';

$errors = array();

if (isset($_POST['register'])) {
	if (empty($_POST['username'])) {
		array_push($errors, "Username is required");
	}
	if (empty($_POST['password_1'])) {
		array_push($errors, "Password is required");
	}
	if (empty($_POST['password_2'])) {
		array_push($errors, "Password submition is required");
	}
	else if ($_POST['password_1'] != $_POST['password_2']) {
		array_push($errors, "The passwords do not match");
	}		
	if (exist($_POST['username'])){
		array_push($errors, "The username already exists");
	}

	//if there are no errors, save user to databese
	if (count($errors) == 0 && exist($_POST['username']) === false) {
		$tmp = unserialize(file_get_contents("./database/user"));
		$new['username'] = $_POST['username'];
		$new['password'] = hash("whirlpool", $_POST['password_1']);
		$tmp[] = $new;
		file_put_contents("./database/user", serialize($tmp));
		header("Location: http://127.0.0.1:8100/RUSH/index.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="./css/style_log.css">
</head>
<body>
<div class="brand">
	<h1>IStore</h1>
</div>
</div>
<div class="header">
	<h2>Register</h2>
</div>

<form action="registration.php" method="post">
	<?php include 'errors.php'; ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Register</button>
	</div>
	<p>
		Already a member? <a href="index.php">Sign in</a>
	</p>
</form>
</body>
</html>