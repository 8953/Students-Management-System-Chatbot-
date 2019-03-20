<?php include('Aserver.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	
	<link rel="stylesheet" type="text/css" href="style23.css">
</head>
<body  style="background-image: url('admin.jpg')">
	<?php include 'menu.php'; ?>

	<div class="header">
		<h2>Admins Login</h2>
	</div>
	
	<form method="post" action="Alogin1.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="Aregister.php">Sign up</a>
		</p>
	</form>

</body>
</html>