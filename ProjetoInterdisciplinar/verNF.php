<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include 'cabecalho.php'
	?>
	<div class="background">
		<div class='centro'>
			<div class='card'>
			<div class="card-body">
				<h4 style="margin-bottom: 8%">-------------Notas fiscais-------------</h4>
				<?php 
					include 'conecta.php';
					include 'verificador.php';

					$consulta = "SELECT * FROM nota_fiscal";
				
					
					foreach ($conex -> query($consulta) as $linhaAtual) {
						echo "<div class=''><h4>Nota Fiscal: ".$linhaAtual['nf']."</h4><br> </div>";
						echo "<div class=''><h4>Data: ".$linhaAtual['data']."</h4><br></div>";
						echo "<div class=''><h4>Valor total: </h4><h5><span class='badge badge-primary'>".$linhaAtual['valor_total']."</span></h5><br></div>";

						$nota = $linhaAtual['nf'];
						$consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";
						
						foreach ($conex -> query($consulta2) as $linhaAtual2) {
							echo "<div class='card-header'>";
							echo "ID: ". $linhaAtual2['id'] ."<br>";
							echo "Código do produto:".$linhaAtual2['cod_produto']."<br>";
							$codigo =$linhaAtual2['cod_produto'];
							$consulta3 = "SELECT * FROM produtos WHERE id='$codigo'";
							foreach ($conex -> query($consulta3) as $linhaAtual3) {
								echo "Produto: ".$linhaAtual3['nome']."<br>";
								echo "Valor unitário: ".$linhaAtual3['preco']."<br>";
							}

							echo "Quantidade: ".$linhaAtual2['qtde']."<br>";
							echo "Sub total: ".$linhaAtual2['subtotal']."<br>";
							echo "</div>";
						}
						
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





