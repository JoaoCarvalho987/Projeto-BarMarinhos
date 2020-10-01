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
	<title>Página inicial</title>
</head>
<body>
	
	
		<?php 
		include 'verificador.php';
		include 'cabecalho.php'
		?>
		<div class="background">
			<div class="card centro">
				<h3 style="margin-top: 5%;">Bar do marinhos</h3>
				<div class="card-body">

				<p style="text-align: justify;">Ao inicar uma nova venda, o sistema irá gerar uma nota fiscal no banco de dados sem o campo "total". A próxima tela será "dataNF", onde teremos o preenchimento do campo "data", levando à tela de inserção de produtos. O processo é finalizado com o campo "total" sendo preenchido no arquivo "finalizar.php".</p>
				</div>
				<div class="card-header">
				<h3>Iniciar uma nova venda</h3>
				<form action="dataNF.php" method="post" class="form-group centro">

					<button class="btn btn-primary" type="submit">Começar</button>

				</form>
				</div>
			</div>
			<div class="centro">
				<button type="button" class="btn btn-primary btn-lg btn-block"><a href="verNF.php">Notas emitidas</a></button>
				<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="verProdutos.php" >Ver produtos</a></button>
				<button type="button" class="btn btn-terceiro btn-lg btn-block"><a href="cadastrarProd.php">Cadastrar produtos</a></button>
			</div>
			<br>
			<br>
			<br>
	</div>
</body>
</html>