<?php 
session_start();

include 'conecta.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$consul = "SELECT * from usuarios where email = '$email' and senha = '$senha'";
$resul = $conex->query($consul);
$regis = $resul->num_rows;

$resul_usu = mysqli_fetch_assoc($resul);

if ($regis != 0){
	$_SESSION['id'] = $resul_usu['id'];
	$_SESSION['nome'] = $resul_usu['nome'];
	$_SESSION['email'] = $resul_usu['email'];


	header('location:restrito.php');
} else {
	header('location: index.php'); 
}

?>