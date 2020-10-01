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
	<title>Revisão</title>
</head>
<body>
	
		<?php 
		include 'conecta.php';
		include 'verificador.php';
		include 'cabecalho.php'
		?>
	<div class="background">
		<div class="centro">
			<div class="card">
			<?php 
			
			$nf = $_SESSION['nf'];

			$consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";

			echo "<div class='card-header'><h4>----------------Nota Fiscal: ". $nf ."----------------</h4><br></div>";
			$total = 0;
			echo "<div class='card-body'>";

			foreach ($conex -> query($consulta) as $linhaAtual) {

				echo "Código do produto: ". $linhaAtual['cod_produto']. "<br>";
				echo "Quantidade: ".$linhaAtual['qtde'] ."<br>";
				echo "Subtotal: ".$linhaAtual['subtotal'] ."<br>";
				$total = $total + $linhaAtual['subtotal'];
				echo "<hr>";
			}
			echo "</div>";
			echo "<div class='container card-header'><h4> <span class='badge badge-secondary'>Total: </h4>". $total."<br></span></div>";

			?>
			<h5><a href="seleUltimaNF.php" class="btn btn-primary btn-lg btn-block" style="text-transform: 0.7em">Inserir novo produto</a></h5>
			<h5><a href="finalizar.php?total=<?php echo $total; ?>" class="btn btn-primary btn-lg btn-block">Finalizar nota fiscal</a></h5>
		</div>
		<br><br><br><br><br><br><br>
	</div>


</body>
</html>