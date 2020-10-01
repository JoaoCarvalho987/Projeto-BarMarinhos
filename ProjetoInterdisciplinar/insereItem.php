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
	<title>Item da nota fiscal</title>
</head>
<body>

	
	<?php
		include 'conecta.php';
		include 'verificador.php';
		include 'cabecalho.php'
	?>
	<div class="background">
		<div class="centro">
			<div class="card" >
			<?php 
				
				$nf = $_SESSION['nf'];
				echo'<div class="card">';
				echo "
					<div class='card-header'>
					<h4>-------------Número da nota fiscal: ". $nf . "-------------</h4>
					</div> 
				</div>
				";

				$idProduto = $_POST['produtoOpcao'];
				$qtdeProduto = $_POST['qtde'];

				$consulta = "SELECT preco,nome FROM produtos WHERE id='$idProduto'";
				$consulta = $conex->query($consulta);
				$linhaAtual = $consulta->fetch_assoc();

				$preco = $linhaAtual['preco'];
				$nome = $linhaAtual['nome'];

				$sub = $preco * $qtdeProduto;

			?>
				
					<form action="insereItemNF.php" method="POST">
						<div class="card-body">
							<h4>Id do produto:</h4>
							<input type="text" name="idProduto" value="<?php echo $idProduto; ?>" reandonly="reandonly" style="border:none; text-align:center;">
						</div>
						<div class="card-body">
							<h4>Produto:</h4>
							<input type="text" name="nomeProduto" value="<?php echo $nome; ?>" reandonly="reandonly" style="border:none; text-align: center;">
						</div>
						<div class="card-body">
							<h4>Valor unitário:</h4>
							<input type="text" name="uniValorProduto" value="<?php echo $preco; ?>" reandonly="reandonly" style="border:none; text-align: center;">
						</div>
						<div class="card-body">
							<h4>Quantidade:</h4>
							<input type="text" name="qtdeProduto" value="<?php echo $qtdeProduto; ?>" reandonly="reandonly" style="border:none; text-align: center;">
						</div>
						<div class="card-body">
							<h4>Subtotal:</h4>
							<input type="text" name="sub" value="<?php echo $sub; ?>" reandonly="reandonly" style="border:none;text-align: center;">
						</div>
						<input type="submit" name="Adicionar produto" value="Adicionar produto" class="btn btn-primary btn-lg btn-block">
					</form>
			</div>
		</div>
	</div>
</body>
</html>