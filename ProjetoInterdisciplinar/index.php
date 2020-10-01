<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="bootstrap.bundle.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-widht, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
</head>
<body>
	<?php
	include 'conecta.php';
	session_start();
	unset(
	$_SESSION['id'],
	$_SESSION['nome'],
	$_SESSION['email']
);
	?>
	<div class="centro" style="margin-top: 10%">
		<div class="card">
			<form action="processa.php" method="POST">
				<h2 class="card-body" style="text-align: center;">
					Login
				</h2>
				<div class="card-header">
					<div style="margin-right: 30%;margin-left: 30%;align-items: center;">
						<input type="text" class="btn btn-block" style="margin-bottom: 2%; margin-top: 10%; background-color: white;	" name="email" placeholder="email">
						<input type="password" class="btn btn-block" style="background-color: white;" name="senha" placeholder="senha"><br>
					</div>
				</div>
				<hr>
			
				<div class="card centro" style="border:none;">
					<input type="submit" name="adicionar" value="Login" class="btn btn-primary " >
				</div>
			</form>
		</div>
	</div>

</body>
</html>