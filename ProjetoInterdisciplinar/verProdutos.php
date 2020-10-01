<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
</head>
<body>

	<?php
	include 'cabecalho.php'
	?>
	<div class="background">
		<div class='centro'>
			<div class='card'>
			<div class="card-body">
				<h4 style="margin-bottom: 8%">-------------Produtos-------------</h4>
				<?php 
					include 'conecta.php';
					include 'verificador.php';

					$consulta = "SELECT * FROM produtos";
				
					
					foreach ($conex -> query($consulta) as $linhaAtual) {
						echo "<div class='card-header'>";
						echo "Produto: ". $linhaAtual['nome'] ."<br>";
						echo "Preço:".$linhaAtual['preco']."<br>";
							
							echo "</div>";
						
						echo "<hr>";

					}
					echo "</div";
					echo "<br>";

				?>
				<a href="index2.php" class="btn btn-secondary btn-lg btn-block">Voltar</a>
			</div>
		</div>
	</div>

</body>
</html>