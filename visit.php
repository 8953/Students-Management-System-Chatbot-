<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	
	<link rel="stylesheet" type="text/css" href="style23.css">
</head>
<body style="background-image: url('vi.jpg')">
	<?php include 'menu.php'; ?>

	<div class="header">
		<h2>Visitor </h2>
	</div>
	
	<form method="post" action="visit.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" >
		</div>
		<div class="input-group">
			<label>E-mail</label>
			<input type="email" name="eid">
		</div>

		<div class="input-group">
			<label>Number</label>
			<input type="text" name="no" >
		</div>
		<div class="input-group">
			<label>Query</label>
			<input type="text" name="queries">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="visiter">Submit</button>
		</div>
		
	</form>

</body>
</html>