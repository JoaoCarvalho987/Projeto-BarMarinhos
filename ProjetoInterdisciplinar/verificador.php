<?php 
session_start();
	

	if ((!isset($_SESSION['id'])==true)&&
		(!isset($_SESSION['nome'])==true)&&
		(!isset($_session['email'])==true)) {
		unset($_SESSION['id']);
		unset($_SESSION['nome']);
		unset($_SESSION['email']);

		header('location:index.php');
	}
?>