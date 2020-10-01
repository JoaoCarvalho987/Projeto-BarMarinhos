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
	<title>Adicionar data</title>
</head>
<body>

	
	<?php 
		include 'cabecalho.php'
	?>
		
			<?php 
				include 'conecta.php';
				include 'verificador.php';
				


				$consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
				$consulta = $conex->query($consulta);
				$linhaAtual = $consulta->fetch_assoc();
				$ultimoRegis = $linhaAtual['ultima'];


	
				$_SESSION['nf'] = $ultimoRegis;
			?>
	<div class="background">
		<div class="centro">
			<div class="card">
		
			
				<form action="insereItem.php?nf='<?php echo $ultimoRegis; ?>'" method="post">
					
						<div class="card-header">
							<h4>-------------Nota fiscal: 
							<a name="nf"> <?php echo $ultimoRegis; ?></a>
							-------------</h4> 
						
					</div>
					<div class="card" style="background-color: transparent;">
						<div class="card-body">
							<h4>Produto:</h4> 
						
							<select name="produtoOpcao" id="produtoOpcao" class="custom-select form-control form-control-sm">
								<?php 
									$consulta = "SELECT * FROM produtos";
									foreach ($conex -> query($consulta) as $linhaAtual) {
									?>
									<option
									value="<?php echo $linhaAtual['id']; ?>">
									<?php echo $linhaAtual['nome'];?>
									</option>
									<?php
									}
									?>
							</select>
						</div>

						<div class="card-body">
							<h4>Quantidade:</h4>
						
							<input type="text" name="qtde">
						</div>
						<hr>
						<input type="submit" name="adicionar"  class="btn btn-primary btn-lg btn-block" >
						</div>
				</form>
			</div>

			
			<hr>
		</div>
<br><br><br><br><br><br><br>
	</div>


</body>
</html>