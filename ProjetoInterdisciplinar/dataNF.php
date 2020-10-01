<?php 
include 'conecta.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data da nota fiscal</title>
</head>
<body>
	
	<?php
		include 'verificador.php';
		include 'cabecalho.php';
	?>
	<div class="background">
		<div class="centro">
			<div class="card">
			  <h5 class="card-header">Data</h5>
			  <div class="card-body">
			    <h5 class="card-title">Insira a data</h5>
			    <form action="geraNF.php" method="post">
					
					<input type="date" name="data">
					<input type="submit" name="Continuar" value="Continuar"class="btn btn-primary container" style="margin-top: 1%;">				

				</form>
			  </div>
			</div>
		</div>
		<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
	</div>
</body>
</html>